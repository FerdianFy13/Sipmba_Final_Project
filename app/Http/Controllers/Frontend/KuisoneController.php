<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Question;
use App\Models\QuestionOne;
use App\Models\User;
use Illuminate\Http\Request;

class KuisoneController extends Controller
{
    //
    public function index()
    {
        //
        return view('frontend.quiz_one.index', [
            'title' => 'Formulir Kuisioner Tahap 1',
            'quiz' => QuestionOne::all(),
            'option' => Option::all(),
            'user' => User::all(),
        ]);
    }

    public function create(Request $request)
    {
        $validation = $request->validate([
            // 'question_one_id' => 'required',
            'user_id' => 'required',
            'answer1' => ['required'],
            'answer2' => ['required'],
            'answer3' => ['required'],
            'answer4' => ['required'],
            'answer5' => ['required'],
            'answer6' => ['required'],
            'answer7' => ['required'],
            'answer8' => ['required'],
            'answer9' => ['required'],
            'answer10' => ['required'],
            'answer11' => ['required'],
            'answer12' => ['required'],
            'answer13' => ['required'],
            'answer14' => ['required'],
            'answer15' => ['required'],
            'answer16' => ['required'],
            'answer17' => ['required'],
            'answer18' => ['required'],
            'answer19' => ['required'],
            'answer20' => ['required'],
            'answer21' => ['required'],
            'answer22' => ['required'],
            'answer23' => ['required'],
            'answer24' => ['required'],
            'answer25' => ['required'],
            'answer26' => ['required'],
            'answer27' => ['required'],
            'answer28' => ['required'],
            'answer29' => ['required'],
            'answer30' => ['required'],
            'answer31' => ['required'],
            'answer32' => ['required'],
            'answer33' => ['required'],
            'answer34' => ['required'],
            'answer35' => ['required'],
            'answer36' => ['required'],
            'answer37' => ['required'],
            'answer38' => ['required'],
            'answer39' => ['required'],
            'answer40' => ['required'],
            'answer41' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Question::create($validation);

        return redirect('/kuisioner2')->with(
            'success',
            'Formulir Kuisioner Tahap 1 berhasil ditambahkan'
        );
    }
}
