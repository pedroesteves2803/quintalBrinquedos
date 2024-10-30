<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Models\Home;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Titulo')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('subtitle')
                    ->label('Subtitulo')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('description_line_one')
                    ->label('Descrição linha 1')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('description_line_two')
                    ->label('Descrição linha 2')
                    ->required()
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
            'index' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}
