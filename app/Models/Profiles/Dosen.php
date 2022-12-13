<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Dosen extends Model
{
    use HasFactory;

    protected $casts = [
        'description' => CleanHtml::class,
    ];

    protected $fillable = [
        'category_dosen_id',
        'name',
        'image',
        'description'
    ];
}
