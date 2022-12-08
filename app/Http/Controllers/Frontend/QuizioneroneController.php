<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Kuizioner;
use Illuminate\Http\Request;

class QuizioneroneController extends Controller
{
    //

    public function index()
    {
        $quiz1 = Kuizioner::whereIn('id', [1, 2, 3])->get();
        $quiz2 = Kuizioner::whereIn('id', [4])->get();
        $quiz3 = Kuizioner::whereIn('id', [5])->get();
        $quiz4 = Kuizioner::whereIn('id', [6])->get();

        // $test = $quiz->find(1);
        return view('frontend.quizioner_one.index', [
            'title' => 'Kuisioner 1',
            'quiz1' => $quiz1,
            'quiz2' => $quiz2,
            'quiz3' => $quiz3,
            'quiz4' => $quiz4,
        ]);
    }
}
