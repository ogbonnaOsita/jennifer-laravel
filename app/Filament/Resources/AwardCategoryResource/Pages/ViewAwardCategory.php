<?php

namespace App\Filament\Resources\AwardCategoryResource\Pages;

use App\Filament\Resources\AwardCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAwardCategory extends ViewRecord
{
    protected static string $resource = AwardCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
