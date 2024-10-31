<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Models\AboutUs;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;
    protected static ?string $modelLabel = 'Sobre Nós';
    protected static ?string $pluralModelLabel = 'Sobre Nós';
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

            FileUpload::make('image')
                ->label('Imagem')
                ->required()
                ->columnSpan('full'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
