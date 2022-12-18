<?php

namespace App\Models\Lab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabTeam extends Model
{
    use HasFactory;

    protected $fillable = [
        'lab_id',
        'dosen_id',
    ];

    public function lab()
    {
        return $this->belongsTo(Lab::class, 'lab_id', 'id');
    }

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    }
}
