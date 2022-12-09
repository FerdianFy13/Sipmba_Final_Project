<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('frontend.contact.index', [
            'title' => 'Kontak',
        ]);
    }

    public function create(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|min:2',
            'email' => ['required'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        Feedback::create($validation);

        return redirect('/kontak')->with(
            'success',
            'New Post created successfully add'
        );
    }
}
