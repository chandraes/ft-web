<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Str;

class Visi extends Model
{
    use HasFactory;

    protected $casts = [
        'visi' => CleanHtml::class,
    ];

    protected $fillable = [
        'visi',
        'is_active'
    ];

    public function getShortDescriptionAttribute()
    {
        return Str::limit(
            nl2br(strip_tags($this->visi)),
            100
        );
    }
}
