<?php
declare(strict_types=1);
namespace App\Filament\Users\Resources\ProjectResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

final class FileManager extends RelationManager
{
    protected static string $relationship = 'files';

    final function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('path')->required(),
            ]);
    }

    final function isReadOnly(): bool
    {
        return false;
    }
}
