<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Province extends Model
{
    use HasFactory;
    use HasTranslations;
    use HasUuids;

    protected $fillable = [
        'slug',
        'ekatte',
        'code',
        'name',
        'description',
    ];

    public array $translatable = [
        'name',
        'description',
    ];
}
