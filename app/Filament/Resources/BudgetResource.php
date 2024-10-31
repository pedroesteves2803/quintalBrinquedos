<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Filament\Resources\BudgetResource\Pages;
use App\Models\Budget;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class BudgetResource extends Resource
{
    protected static ?string $model = Budget::class;
    protected static ?string $modelLabel            = 'Orçamento';
    protected static ?string $pluralModelLabel      = 'Orçamentos';
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
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\EditBudget::route('/{record}/edit'),
        ];
    }
}
