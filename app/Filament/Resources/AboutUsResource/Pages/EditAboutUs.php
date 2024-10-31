<?php

declare(strict_types=1);

namespace App\Filament\Resources\AboutUsResource\Pages;

use App\Filament\Resources\AboutUsResource;
use Filament\Resources\Pages\EditRecord;

class EditAboutUs extends EditRecord
{
    protected static string $resource = AboutUsResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }

    public function getBreadcrumbs(): array
    {
        return [];
    }
}
