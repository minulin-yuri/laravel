<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $news = News::getNewsSortByCategory();
        return view('index')->with('news', $news);
    }
}
