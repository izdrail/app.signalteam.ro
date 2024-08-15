<?php
declare(strict_types=1);
namespace App\Filament\Users\Resources\ProjectResource\Pages;


use App\Enums\ProjectStatus;
use App\Filament\Resources\ProjectResource;
use App\Filament\Resources\ProjectResource\RelationManagers\FileManager;
use App\Filament\Resources\ProjectResource\RelationManagers\TaskManager;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    final function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form
            ->columns(1)
            ->schema([
                TextInput::make('title')->columns(2)->required(),
                Select::make('status')->options(ProjectStatus::toArray()),
                RichEditor::make('description')->columns(1),
                Repeater::make('tasks')
                    ->relationship('tasks')
                    ->schema([
                        TextInput::make('title')->columns(1),
                    ])
                    ->columns(1),
                Repeater::make('files')
                    ->relationship('files')
                    ->schema([
                        FileUpload::make('path'),
                    ])
                    ->columns(1)
            ]);
    }

    public static function getRelations(): array
    {
        return [
            'tasks' => TaskManager::class,
            'files' => FileManager::class,
        ];
    }

}
