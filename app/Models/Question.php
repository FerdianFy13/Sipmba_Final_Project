<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questionOne()
    {
        return $this->belongsTo(QuestionOne::class);
    }

    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}
