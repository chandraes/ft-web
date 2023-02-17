<?php

namespace App\Models\Lab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Str;
use App\Models\Profiles\Dosen;

class Lab extends Model
{
    use HasFactory;

    protected $casts = [
        'description' => CleanHtml::class,
    ];

    protected $fillable = [
        'name',
        'slug',
        'category_lab_id',
        'kepala_lab',
        'koordinator_asisten',
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

    public function category()
    {
        return $this->belongsTo(CategoryLab::class, 'category_lab_id', 'id');
    }

    public function team()
    {
        return $this->hasMany(LabTeam::class, 'lab_id', 'id');
    }

    public function dosen()
    {
        return $this->hasManyThrough(
            Dosen::class,
            LabTeam::class,
            'lab_id',
            'id',
            'id',
            'dosen_id'
        );
    }
}
