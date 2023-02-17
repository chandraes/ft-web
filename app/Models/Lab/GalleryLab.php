<?php

namespace App\Models\Lab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryLab extends Model
{
    use HasFactory;

    protected $fillable = [
        'lab_id',
        'gallery_image',
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }

}
