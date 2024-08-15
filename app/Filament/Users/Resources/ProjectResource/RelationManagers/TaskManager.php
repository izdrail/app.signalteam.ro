<?php
declare(strict_types=1);
namespace App\Filament\Users\Resources\ProjectResource\RelationManagers;

use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class TaskManager extends RelationManager
{
    protected static string $relationship = 'tasks';

    public function isReadOnly(): bool
    {
        return true;
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    final function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
            ])
            ->filters([
                //
            ])
            ->actions([

            ])
            ->bulkActions([

            ]);
    }
}
