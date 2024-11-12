<?php

namespace App\Filament\Resources;

use App\Enums\SubjectTypeEnum;
use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;
    protected static ?string $modelLabel = 'Contato';
    protected static ?string $pluralModelLabel = 'Contatos';
    protected static bool $shouldRegisterNavigation = false;

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
//                ToggleColumn::make('_active')
//                    ->state(function (Contact $record) {
//                            return $record->subject_type === 3 ? $record->active : null;
//                    })
//                    ->label('Exibir'),
            ])
            ->filters([
                SelectFilter::make('subject_type')
                    ->label('Categoria')
                    ->options(SubjectTypeEnum::toArray())
                    ->searchable()
                    ->preload()
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
