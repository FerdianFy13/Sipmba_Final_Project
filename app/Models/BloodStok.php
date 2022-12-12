<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodStok extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function bloodComponent()
    {
        return $this->belongsTo(BloodComponent::class);
    }

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class);
    }
}
