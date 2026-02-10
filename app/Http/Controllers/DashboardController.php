<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'articles_count' => Article::count(),
            'videos_count' => Video::count(),
            'categories_count' => Category::count(),
        ];

        $recent_articles = Article::with('category')->latest()->take(2)->get();
        $recent_videos = Video::latest()->take(2)->get();

        return view('admin.Dashboard.home', compact('stats', 'recent_articles', 'recent_videos'));
    }
}
