<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Str;

class Jurnal extends Model
{
    use HasFactory;

    protected $casts = [
        'content' => CleanHtml::class,
    ];

    public function getShortDescriptionAttribute()
    {
        return Str::limit(
            nl2br(strip_tags($this->content)),
            50
        );
    }

    protected $fillable = [
        'title',
        'image',
        'content',
    ];

}
