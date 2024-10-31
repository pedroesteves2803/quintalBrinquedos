<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\ConfigResource\Pages;
use App\Models\Config;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class ConfigResource extends Resource
{
    protected static ?string $model = Config::class;
    protected static ?string $modelLabel            = 'Configuração';
    protected static ?string $pluralModelLabel      = 'Configurações';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('address')
                    ->label('Endereço')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('email')
                    ->label('E-mail')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('facebook')
                    ->label('Link do Facebook')
                    ->url()
                    ->columnSpan('full'),

                TextInput::make('instagram')
                    ->label('Link do Instagram')
                    ->url()
                    ->columnSpan('full'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditConfig::route('/{record}/edit'),
        ];
    }
}
