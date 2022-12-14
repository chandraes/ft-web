<?php

namespace App\Models\Lab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Str;

class Lab extends Model
{
    use HasFactory;

    protected $casts = [
        'description' => CleanHtml::class,
    ];

    protected $fillable = [
        'name',
        'slug',
        'kepala_lab',
        'location',
        'description',
        'image',
    ];

    public function getShortDescriptionAttribute()
    {
        return Str::limit(
            nl2br(strip_tags($this->description)),
            25
        );
    }

    public function gallery()
    {
        return $this->hasMany(GalleryLab::class, 'lab_id', 'id');
    }
}
