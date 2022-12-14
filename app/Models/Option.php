<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function BloodDonorInput()
    {
        return $this->hasMany(BloodDonorInput::class);
    }

    public function Question()
    {
        return $this->hasMany(Question::class);
    }
}
