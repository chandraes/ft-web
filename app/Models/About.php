<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

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
