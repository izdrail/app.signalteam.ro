<?php
declare(strict_types=1);
namespace App\Filament\Users\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;


class ViewProject extends ViewRecord
{
    protected static string $resource = ProjectResource::class;

    final function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(1)
            ->schema([
                TextEntry::make('title'),
                TextEntry::make('status'),
                TextEntry::make('description'),
            ]);
    }

}
