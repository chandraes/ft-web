<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

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
}
