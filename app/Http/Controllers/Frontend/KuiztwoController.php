<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\QuestionOne;
use App\Models\Questiontwo;
use App\Models\User;
use Illuminate\Http\Request;

class KuiztwoController extends Controller
{
    //
    public function index()
    {
        //
        return view('frontend.quiz_two.index', [
            'title' => 'Formulir Kuisioner Tahap 2',
            'quiz' => Questiontwo::all(),
            'option' => Option::all(),
            'user' => User::all(),
        ]);
    }

    public function create(Request $request)
    {
        //
        $validation = $request->validate([
            // 'question_one_id' => 'required',
            'user_id' => 'required',
            'answer1' => ['required'],
            'answer2' => ['required'],
            'answer3' => ['required'],
            'answer4' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Questiontwo::create($validation);

        return redirect('/konfirmasi')->with(
            'success',
            'Formulir kuisioner tahap 2 berhasil ditambahkan'
        );
    }
}
