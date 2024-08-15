<?php
declare(strict_types=1);
namespace App\Filament\Users\Resources\ProjectResource\Pages;

use App\Filament\Users\Resources\ProjectResource;
use Filament\Resources\Pages\ListRecords;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;

    final function getHeaderActions(): array
    {
        return [

        ];
    }

    final function getTableActions(): array
    {
        return [

        ];
    }

}

