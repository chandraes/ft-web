<?php

namespace App\Models\Lab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabEquipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'lab_id',
        'name',
        'dosen_uji',
        'pengujian',
        'std_pengujian',
        'capaian',
    ];


    public function lab()
    {
        return $this->belongsTo(Lab::class);
    }

    // get and set dosen uji as array from json
    

    public function labEquipmentImage()
    {
        return $this->hasMany(LabEquipmentImage::class);
    }

    
}