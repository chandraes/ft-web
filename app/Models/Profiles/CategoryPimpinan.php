<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryPimpinan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'order',
    ];

    public function pimpinan()
    {
        return $this->hasMany(Pimpinan::class, 'category_pimpinan_id', 'id');
    }
}
