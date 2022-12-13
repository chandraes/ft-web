<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Jurnal extends Model
{
    use HasFactory;

    protected $casts = [
        'content' => CleanHtml::class,
    ];

    protected $fillable = [
        'title',
        'image',
        'content',
    ];

}
