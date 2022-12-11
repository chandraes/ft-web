<?php

namespace App\Models\Informasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryInformation extends Model
{
    use HasFactory;
    protected $table = 'category_information';

    protected $fillable = [
        'name'
    ];

    /**
     * Get all of the information for the CategoryInformation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function information()
    {
        return $this->hasMany(Informasi::class,'category_information_id', 'id');
    }
}
