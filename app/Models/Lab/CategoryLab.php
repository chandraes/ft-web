<?php

namespace App\Models\Lab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryLab extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
}
