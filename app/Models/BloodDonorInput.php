<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodDonorInput extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $hidden = [''];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }

    public function definition()
    {
        return [
            'token' => $this->faker->numerify('pmi-###'),
        ];
    }
}
