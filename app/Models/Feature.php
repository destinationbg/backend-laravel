<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Feature extends Model
{
    use HasFactory;
    use HasUuids;
    use HasTranslations;

    protected $fillable = [
        'slug',
        'title',
        'description',
    ];

    public array $translatable = [
        'title',
        'description',
    ];
}
