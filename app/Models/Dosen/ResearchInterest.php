<?php

namespace App\Models\Dosen;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profiles\Dosen;

class ResearchInterest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dosen_id'
    ];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'dosen_id', 'id');
    }

}
