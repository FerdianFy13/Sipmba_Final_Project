<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Kuizioner;
use Illuminate\Http\Request;

class KuizionerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $kuizioner = Kuizioner::with('category')->paginate(10);

        return view('backend.kuizioner.index', [
            'title' => 'Kuisioner',
            'quiz' => Kuizioner::with('category')
                // ->where('category_id', 1)
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
        return view('backend.kuizioner.create', [
            'title' => 'Create Kuisioner',
            'categories' => Category::all(),
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
            'category_id' => 'required',
            'question' => ['required', 'min:2'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Kuizioner::create($validation);

        return redirect('/kuisioner')->with(
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
        $quiz = Kuizioner::findOrFail($id);

        return view('backend.kuizioner.update', [
            'title' => 'Update Kuisioner',
            'categories' => Category::all(),
            'quiz' => $quiz,
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
            'category_id' => 'required',
            'question' => ['required', 'min:2'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Kuizioner::whereId($id)->update($validation);

        return redirect('/kuisioner')->with(
            'update',
            'Questionnaire successfully update'
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
        $quizs = Kuizioner::findOrFail($id);
        $quizs->delete();
        return redirect('kuisioner')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
