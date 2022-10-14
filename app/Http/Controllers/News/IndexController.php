<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;

class IndexController extends Controller
{
    public function index()
    {
        $news = News::getNews();
        return view('news.news')->with('news', $news);
    }

    public function show($id)
    {
        $news = News::getNewsId($id);

        return view('news.newsOne')->with('news', $news);
    }
}
