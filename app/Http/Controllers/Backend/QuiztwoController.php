<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\Questiontwo;
use App\Models\User;
use Illuminate\Http\Request;

class QuiztwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.kuizioner_two.index', [
            'title' => 'Data Kuisioner Dua Pendonor',
            'data' => Questiontwo::with('user')
                ->latest()
                ->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.kuizioner_two.create', [
            'title' => 'Create Data Kuisioner Dua Pendonor',
            'quiz' => Questiontwo::all(),
            'option' => Option::all(),
            'user' => User::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

        return redirect('/two-kuisioner')->with(
            'success',
            'New Post created successfully add'
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $quiz = Questiontwo::findOrFail($id);

        return view('backend.kuizioner_two.show', [
            'title' => 'Detail Data Kuisioner Dua Pendonor',
            'quiz' => $quiz,
            'option' => Option::all(),
            'user' => User::all(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $quiz = Questiontwo::findOrFail($id);

        return view('backend.kuizioner_two.update', [
            'title' => 'Update Data Kuisioner Dua Pendonor',
            'quiz' => $quiz,
            'option' => Option::all(),
            'user' => User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validation = $request->validate([
            'user_id' => 'required',
            'answer1' => ['required'],
            'answer2' => ['required'],
            'answer3' => ['required'],
            'answer4' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Questiontwo::whereId($id)->update($validation);

        return redirect('/two-kuisioner')->with(
            'update',
            'Questionnaire Two successfully update'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $quiz = Questiontwo::findOrFail($id);
        $quiz->delete();
        return redirect('two-kuisioner')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
