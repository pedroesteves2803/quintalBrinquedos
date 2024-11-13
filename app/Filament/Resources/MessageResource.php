<?php

namespace App\Filament\Resources;

use App\Enums\SubjectTypeEnum;
use App\Filament\Resources\MessageResource\Pages;
use App\Models\Contact;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class MessageResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $modelLabel = 'Contato';
    protected static ?string $pluralModelLabel = 'Contatos';
    protected static bool $shouldRegisterNavigation = false;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->where('subject_type', SubjectTypeEnum::Message->value);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nome'),

                TextColumn::make('email')
                    ->label('E-mail'),

                TextColumn::make('phone')
                    ->label('Telefone'),

                TextColumn::make('subject_type')
                    ->getStateUsing(fn ($record) => match ((string) $record->subject_type) {
                        '1' => 'Orçamento',
                        '2' => 'Informações',
                        '3' => 'Mensagem',
                        default => $record->subject_type,
                    })
                    ->label('Tipo'),

                    ToggleColumn::make('active')
                        ->label('Exibir')
                        ->afterStateUpdated(function (Contact $record, $state) {
                            $activeCount = Contact::where('active', true)->count();

                            if ($activeCount >= 4 && $state === true) {
                                Notification::make()
                                    ->warning()
                                    ->title('Limite de Registros Ativos Alcançado')
                                    ->body('Você não pode exibir mais de 3 registros!')
                                    ->send();

                                $record->update(['active' => false]);

                                return false;
                            }

                            return true;
                        })
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')
                    ->size(TextEntry\TextEntrySize::Large)
                    ->label('Nome')
                    ->columnSpan('full'),

                TextEntry::make('surname')
                    ->size(TextEntry\TextEntrySize::Large)
                    ->label('Sobrenome')
                    ->columnSpan('full'),

                TextEntry::make('phone')
                    ->size(TextEntry\TextEntrySize::Large)
                    ->label('Telefone')
                    ->columnSpan('full'),

                TextEntry::make('email')
                    ->size(TextEntry\TextEntrySize::Large)
                    ->label('E-mail')
                    ->columnSpan('full'),

                TextEntry::make('message')
                    ->size(TextEntry\TextEntrySize::Large)
                    ->label('Mensagem')
                    ->columnSpan('full'),

                TextEntry::make('subject_type')
                    ->size(TextEntry\TextEntrySize::Large)
                    ->label('Tipo')
                    ->getStateUsing(fn ($record) => match ((string) $record->subject_type) {
                        '1' => 'Orçamento',
                        '2' => 'Informações',
                        '3' => 'Mensagem',
                        default => $record->subject_type,
                    })
                    ->columnSpan('full'),

                TextEntry::make('active')
                    ->size(TextEntry\TextEntrySize::Large)
                    ->label('Ativo')
                    ->getStateUsing(fn ($record) => match ((string) $record->active) {
                        '0' => 'Não',
                        '1' => 'Sim',
                        default => $record->active,
                    })
                    ->columnSpan('full'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMessages::route('/'),
        ];
    }
}
