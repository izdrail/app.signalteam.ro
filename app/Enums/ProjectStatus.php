<?php


namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ProjectStatus: string implements HasColor, HasIcon, HasLabel
{
    case New = 'new';
    case Pending = 'pending';
    case Completed = 'completed';
    case Cancelled = 'cancelled';
    case Finished = 'finished';

    public function getLabel(): string
    {
        return match ($this) {
            self::New => 'New',
            self::Pending => 'Pending',
            self::Cancelled => 'Cancelled',
            self::Completed => 'Completed',
            self::Finished => 'Finished',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::New => 'info',
            self::Pending => 'warning',
            self::Cancelled => 'danger',
            self::Finished => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::New => 'heroicon-m-sparkles',
            self::Pending => 'heroicon-m-arrow-path',
            self::Cancelled => 'heroicon-m-x-circle',
        };
    }

    public static function toArray(): array
    {
        $values = [
            self::New,
            self::Pending,
            self::Completed,
            self::Cancelled,
            self::Finished,
        ];

        $results = [];

        foreach ($values as $status) {
            $results[] = $status->getLabel();
        }

        return $results;
    }

}
