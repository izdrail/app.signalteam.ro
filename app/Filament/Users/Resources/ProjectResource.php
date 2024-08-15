<?php
declare(strict_types=1);
namespace App\Filament\Users\Resources;


use App\Filament\Users\Resources\ProjectResource\Pages\EditProject;
use App\Filament\Users\Resources\ProjectResource\Pages\ListProjects;
use App\Filament\Users\Resources\ProjectResource\Pages\ViewProject;
use App\Filament\Users\Resources\ProjectResource\RelationManagers\FileManager;
use App\Filament\Users\Resources\ProjectResource\RelationManagers\TaskManager;
use App\Models\Project;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';

    public static function table(Table|\Filament\Tables\Table $table): \Filament\Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('status'),
            ])

            ->actions([
                ViewAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            'tasks' => TaskManager::class,
            'files' => FileManager::class,
        ];
    }



    public static function getPages(): array
    {
        return [
            'index' => ListProjects::route('/'),
            'view' => ViewProject::route('/{record}/view'),
            'edit' => EditProject::route('/{record}/edit'),
        ];
    }
}
