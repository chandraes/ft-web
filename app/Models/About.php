<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class About extends Model
{
    use HasFactory;

    protected $casts = [
        'about' => CleanHtml::class,
    ];

    protected $fillable = [
        'about',
        'image',
        'phone',
        'fax',
        'email',
        'address',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'map',
    ];
}
