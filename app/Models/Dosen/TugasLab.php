<?php

namespace App\Models\Dosen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profiles\Dosen;

class TugasLab extends Model
{
    use HasFactory;

    protected $fillable = [
        'dosen_id',
        'tahun',
        'judul',
        'spesialisasi',
        'capaian',
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
}
