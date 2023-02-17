<?php

namespace App\Models\Dosen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dosen\MkDosen;
use App\Models\Profiles\Dosen;

class MataKuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'name',
        'slug',
    ];

    public function dosen()
    {
        return $this->hasManyThrough(Dosen::class, MkDosen::class, 'mata_kuliah_id', 'id', 'id', 'dosen_id');
    }



}
