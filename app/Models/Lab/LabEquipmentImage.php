<?php

namespace App\Models\Lab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabEquipmentImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'lab_equipment_id',
        'eq_image',
    ];

    public function labEquipment()
    {
        return $this->belongsTo(LabEquipment::class);
    }

    
}
