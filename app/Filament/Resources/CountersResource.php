<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\CountersResource\Pages;
use App\Models\Counters;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class CountersResource extends Resource
{
    protected static ?string $model = Counters::class;
    protected static ?string $modelLabel            = 'Contador';
    protected static ?string $pluralModelLabel      = 'Contadores';
    protected static bool $shouldRegisterNavigation = false;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('counter_one')
                ->numeric()
                ->label('Contador 1')
                ->required()
                ->columnSpan('full'),

                TextInput::make('counter_one_text')
                    ->label('Descrição do Contador 1')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('counter_two')
                    ->numeric()
                    ->label('Contador 2')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('counter_two_text')
                    ->label('Descrição do Contador 2')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('counter_three')
                    ->numeric()
                    ->label('Contador 3')
                    ->required()
                    ->columnSpan('full'),

                TextInput::make('counter_three_text')
                    ->label('Descrição do Contador 3')
                    ->required()
                    ->columnSpan('full'),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditCounters::route('/{record}/edit'),
        ];
    }
}
