<?php

namespace App\Models\Dosen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profiles\Dosen;

class RiwayatPendidikan extends Model
{
    use HasFactory;

    protected $fillable = [
        'dosen_id',
        'jenjang_pendidikan',
        'program_studi',
        'tempat_pendidikan',
        'tahun_lulus',
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
