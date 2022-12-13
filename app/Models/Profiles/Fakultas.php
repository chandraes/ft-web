<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Str;

class Fakultas extends Model
{
    use HasFactory;

    protected $casts = [
        'content' => CleanHtml::class,
    ];

    protected $fillable = [
        'title',
        'subtitle',
        'content',
        'image',
        'is_active'
    ];

    public function getShortDescriptionAttribute()
    {
        return Str::limit(
            nl2br(strip_tags($this->content)),
            50
        );
    }
}
