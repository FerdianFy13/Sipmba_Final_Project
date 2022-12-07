<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('backend.event.index', [
            'title' => 'Event',
            'event' => Event::all(),
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
        return view('backend.event.create', [
            'title' => 'Create Event',
            'events' => Event::all(),
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
            'place' => ['required', 'min:2'],
            'alamat' => ['required', 'min:2'],
            'time' => ['required'],
            'date' => ['required'],
            'call' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Event::create($validation);

        return redirect('/event')->with(
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
        $event = Event::findOrFail($id);
        //
        return view('backend.event.show', [
            'title' => 'Detail Event',
            'events' => $event,
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
        $event = Event::findOrFail($id);
        //
        return view('backend.event.update', [
            'title' => 'Update Event',
            'events' => $event,
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
            'place' => ['required', 'min:2'],
            'alamat' => ['required', 'min:2'],
            'time' => ['required'],
            'date' => ['required'],
            'call' => ['required'],
        ];

        $validationData = $request->validate($validation);

        Event::whereId($id)->update($validationData);

        return redirect('/event')->with('update', 'Event successfully update');
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
        $events = Event::findOrFail($id);
        $events->delete();
        return redirect('event')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }
}
