<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.feedback.index', [
            'title' => 'Feedback',
            'feedbacks' => Feedback::with('user')->paginate(10),
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
        return view('backend.feedback.create', [
            'title' => 'Create Feedback',
            'feedback' => Feedback::all(),
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
            'name' => 'required|min:2',
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Feedback::create($validation);

        return redirect('/feedback')->with(
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
        $feedback = Feedback::findOrFail($id);

        return view('backend.feedback.show', [
            'title' => 'Create Feedback',
            'feedback' => $feedback,
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
        $feedback = Feedback::findOrFail($id);

        return view('backend.feedback.update', [
            'title' => 'Update Feedback',
            'feedback' => $feedback,
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
        $validation = [
            'name' => 'required|min:2',
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ];

        $validationData = $request->validate($validation);

        Feedback::whereId($id)->update($validationData);

        return redirect('/feedback')->with(
            'update',
            'Feedback successfully update'
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
        $feedback = Feedback::findOrFail($id);
        $feedback->delete();
        return redirect('feedback')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
