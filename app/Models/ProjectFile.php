<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProjectFile extends Authenticatable implements FilamentUser
{
    use HasFactory;

    public $table = "project_files";

    public $fillable = [
        'path',
        'project_id',
    ];

    final function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    final function project(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
