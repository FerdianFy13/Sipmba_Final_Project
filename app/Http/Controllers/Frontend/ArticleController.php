<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        return view('frontend.article.index', [
            'title' => 'Artikel',
            'news' => News::with('user')->latest()->paginate(6),
        ]);
    }

    public function show(News $news)
    {
        // $data = News::findOrFail($id);

        return view('frontend.article.detail', [
            'title' => 'Detail Artikel',
            'data' => $news,
        ]);
    }
}
