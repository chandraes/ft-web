<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Str;

class Dosen extends Model
{
    use HasFactory;

    protected $table = 'dosens';

    protected $casts = [
        'description' => CleanHtml::class,
    ];

    protected $fillable = [
        'category_dosen_id',
        'name',
        'image',
        'description'
    ];

    public function getShortDescriptionAttribute()
    {
        return Str::limit(
            nl2br(strip_tags($this->description)),
            20
        );
    }

    public function category()
    {
        return $this->hasOne(CategoryDosen::class, 'id');
    }

    public function labteam()
    {
        return $this->hasMany(LabTeam::class, 'dosen_id', 'id');
    }

    public function lab()
    {
        return $this->hasManyThrough(
            Lab::class,
            LabTeam::class,
            'dosen_id',
            'id',
            'id',
            'lab_id'
        );
    }

    public function mk_dosen()
    {
        return $this->hasMany(MkDosen::class, 'dosen_id', 'id');
    }

    public function mata_kuliah()
    {
        return $this->hasManyThrough(
            MataKuliah::class,
            MkDosen::class,
            'dosen_id',
            'id',
            'id',
            'mata_kuliah_id'
        );
    }

}
