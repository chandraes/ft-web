<?php

namespace App\Models\Informasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Informasi extends Model
{
    use HasFactory;

    protected $casts = [
        'content' => CleanHtml::class,
    ];

    protected $fillable = [
        'title',
        'category_information_id',
        'image',
        'content'
    ];
}
