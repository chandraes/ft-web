<?php

namespace App\Models\Informasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'category_information_id',
        'image',
        'content'
    ];
}
