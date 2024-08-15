<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Task extends Authenticatable implements FilamentUser
{
    use HasFactory;

    public $table = "tasks";

    public $fillable = [
        "name",
        'project_id',
    ];

    public function canAccessPanel(Panel $panel): bool
    {
        return true;
    }

    public function project(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Project::class);
    }


}
