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

    public function lab()
    {
        return $this->hasMany(Lab::class, 'category_lab_id', 'id');
    }
}
