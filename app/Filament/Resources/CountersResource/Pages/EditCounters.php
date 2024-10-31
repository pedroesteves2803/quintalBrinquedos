<?php

declare(strict_types=1);

namespace App\Filament\Resources\CountersResource\Pages;

use App\Filament\Resources\CountersResource;
use Filament\Resources\Pages\EditRecord;

class EditCounters extends EditRecord
{
    protected static string $resource = CountersResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function getBreadcrumbs(): array
    {
        return [];
    }
}
