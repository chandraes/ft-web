<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;

class Pimpinan extends Model
{
    use HasFactory;

    protected $casts = [
        'description' => CleanHtml::class,
    ];

    protected $fillable = [
        'name',
        'jabatan',
        'category_pimpinan_id',
        'description',
        'image',
    ];

    public function category()
    {
        return $this->hasOne(CategoryPimpinan::class, 'id');
    }

}
