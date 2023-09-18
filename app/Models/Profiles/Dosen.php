<?php

namespace App\Models\Profiles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mews\Purifier\Casts\CleanHtml;
use Illuminate\Support\Str;
use App\Models\Dosen\MkDosen;
use App\Models\Dosen\MataKuliah;
use App\Models\Dosen\LabTeam;
use App\Models\Dosen\Lab;
use App\Models\Dosen\CategoryDosen;
use App\Models\Dosen\ResearchInterest;
use App\Models\Dosen\RiwayatPendidikan;
use App\Models\Dosen\TugasLab;

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
        'nip_nidn',
        'email',
        'gs_link',
        'scopus_link',
        'sinta_link',
        'wos_link',
        'image',
        'description',
        'pangkat',
        'jabfung',
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

    public function research_interest()
    {
        return $this->hasMany(ResearchInterest::class, 'dosen_id', 'id');
    }

    public function riwayat_pendidikan()
    {
        return $this->hasMany(RiwayatPendidikan::class, 'dosen_id', 'id');
    }

    public function tugas_lab()
    {
        return $this->hasMany(TugasLab::class, 'dosen_id', 'id');
    }

}
