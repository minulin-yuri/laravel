<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\News;

class CategoriesController extends Controller
{
    public function index()
    {
        $news = News::getNewsSortByCategory();
        return view('news.categories')->with('news', $news);
    }

    public function show($category)
    {
        $news = News::getNewsByCategoryTitle($category);

        return view('news.categoriesOne')->with([
            'news' => $news,
            'category' => $category
        ]);
    }
}
