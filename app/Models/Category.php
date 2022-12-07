<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // protected $fillable = ['name'];

    public function kuizioner()
    {
        return $this->hasMany(Kuizioner::class);
    }

    public function officerData()
    {
        return $this->hasMany(OfficerData::class);
    }

    public function BloodDonorInput()
    {
        return $this->hasMany(BloodDonorInput::class);
    }
}
