<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Region extends Model
{
    use HasFactory;
    use HasTranslations;
    use HasUuids;

    protected $fillable = [
        'slug',
        'color',
        'title',
        'description',
    ];

    public array $translatable = [
        'title',
        'description',
    ];
}
