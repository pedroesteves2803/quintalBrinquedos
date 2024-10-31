<?php

declare(strict_types=1);

namespace App\Filament\Resources\CredibilityStatementsResource\Pages;

use App\Filament\Resources\CredibilityStatementsResource;
use Filament\Resources\Pages\EditRecord;

class EditCredibilityStatements extends EditRecord
{
    protected static string $resource = CredibilityStatementsResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function getBreadcrumbs(): array
    {
        return [];
    }
}
