<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

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
}
