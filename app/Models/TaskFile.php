<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaskFile extends Authenticatable implements FilamentUser
{
    use HasFactory;

    public $table = "task_files";

    public $fillable = [
        "path",
        'task_id',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }



    public function task(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Task::class);
    }
}
