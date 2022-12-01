<?php

namespace App\Http\Controllers\Backend;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('backend.news.news', [
            'title' => 'Berita',
            'news' => News::all(),
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
        return view('backend.news.create', [
            'title' => 'Create Article',
            'news' => News::all(),
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
            'title' => ['required', 'max:255', 'min:4'],
            'slug' => ['required', 'max:255', 'min:2'],
            'author' => ['required', 'max:255', 'min:4'],
            'image' => 'image|required|file|max:10120|mimes:png,jpg,jpeg',
            'body' => ['required'],
        ]);

        if ($request->file('image')) {
            $validation['image'] = $request
                ->file('image')
                ->store('article-images');
        }

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        News::create($validation);

        return redirect('/berita')->with(
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
        $newsly = News::findOrFail($id);

        return view('backend.news.show', [
            'title' => 'Show Article',
            'news' => $newsly,
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
        $news = News::findOrFail($id);
        //
        return view('backend.news.update', [
            'title' => 'Update Article',
            'news' => $news,
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
            'title' => ['required', 'max:255', 'min:4'],
            'slug' => ['required', 'max:255', 'min:2'],
            'author' => ['required', 'max:255', 'min:4'],
            'image' => 'image|file|max:10120|mimes:png,jpg,jpeg',
            'body' => ['required'],
        ];

        // if ($request->slug != $news->slug) {
        //     $validations['slug'] = ['required', 'max:255', 'min:2'];
        // }

        $validationData = $request->validate($validation);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validationData['image'] = $request
                ->file('image')
                ->store('article-images');
        }

        // Create insert to table post a view in my portfolio and portofolio a front-end layout
        News::whereId($id)->update($validationData);

        return redirect('/berita')->with(
            'update',
            'Post update successfully update'
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
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('berita')->with(
            'delete',
            'Data destroy successfully delete'
        );
    }

    public function checkSLug(Request $request)
    {
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
