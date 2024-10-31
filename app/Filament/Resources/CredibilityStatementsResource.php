<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\CredibilityStatementsResource\Pages;
use App\Models\CredibilityStatements;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class CredibilityStatementsResource extends Resource
{
    protected static ?string $model = CredibilityStatements::class;
    protected static ?string $modelLabel = 'Credibilidade';
    protected static ?string $pluralModelLabel = 'Credibilidades';
    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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

                TextInput::make('title_advantage_one')
                    ->label('Título da Vantagem 1')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('subtitle_advantage_one')
                    ->label('Subtítulo da Vantagem 1')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('title_advantage_two')
                    ->label('Título da Vantagem 2')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('subtitle_advantage_two')
                    ->label('Subtítulo da Vantagem 2')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('title_advantage_three')
                    ->label('Título da Vantagem 3')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('subtitle_advantage_three')
                    ->label('Subtítulo da Vantagem 3')
                    ->required()
                    ->columnSpan('full'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditCredibilityStatements::route('/{record}/edit'),
        ];
    }
}
