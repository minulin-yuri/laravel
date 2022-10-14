<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class IndexController extends Controller
{
    public function index()
    {
        $news = News::getNewsSortByCategory();
        return view('index')->with([
            'user' => 'User',
            'news' => $news,
        ]);
    }
}
