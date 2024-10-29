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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->columnSpan('full'),
                TextInput::make('subtitle')
                    ->columnSpan('full'),
                TextInput::make('description_line_one')
                    ->columnSpan('full'),
                TextInput::make('description_line_two')
                    ->columnSpan('full'),
                TextInput::make('button')
                    ->columnSpan('full'),
                FileUpload::make('image')
                    ->columnSpan('full'),
            ]);
    }
    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\CreateHome::route('/'),
            'edit' => Pages\EditHome::route('/{record}/edit'),
        ];
    }
}
