<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Models\Client;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;
    protected static ?string $modelLabel = 'Cliente';
    protected static ?string $pluralModelLabel = 'Clientes';
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

            MarkdownEditor::make('description')
                ->label('Descrição')
                ->required()
                ->toolbarButtons([
                    'redo',
                    'undo',
                ])
                ->columnSpan('full'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}
