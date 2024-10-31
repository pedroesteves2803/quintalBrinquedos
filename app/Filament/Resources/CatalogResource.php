<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\CatalogResource\Pages;
use App\Models\Catalog;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class CatalogResource extends Resource
{
    protected static ?string $model = Catalog::class;
    protected static ?string $modelLabel = 'Página do Catálogo';
    protected static ?string $pluralModelLabel = 'Páginas do Catálogo';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('title')
                ->label('Título')
                ->required()
                ->columnSpan('full'),

            TextInput::make('subtitle')
                ->label('Subtítulo')
                ->required()
                ->columnSpan('full'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditCatalog::route('/{record}/edit'),
        ];
    }
}
