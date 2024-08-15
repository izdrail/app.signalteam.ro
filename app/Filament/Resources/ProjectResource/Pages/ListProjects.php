<?php
declare(strict_types=1);
namespace App\Filament\Resources\ProjectResource\Pages;

use App\Enums\ProjectStatus;
use App\Filament\Resources\ProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ListProjects extends ListRecords
{
    protected static string $resource = ProjectResource::class;


    final function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    final function getTableActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
