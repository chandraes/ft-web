<?php

namespace App\Models\Informasi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profiles\Pegawai;
use App\Models\Profiles\Dosen;

class CategoryDosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'jurusan_prodi'
    ];

    public function information()
    {
        return $this->hasMany(Dosen::class,'category_dosen_id', 'id');
    }

    public function dosen()
    {
        //belong to many dosen
        return $this->belongsToMany(Dosen::class, 'category_dosen_id', 'id');
    }

    public function pegawai()
    {
        //belong to many pegawai
        return $this->belongsToMany(Pegawai::class, 'category_dosen_id', 'id');
    }

}
