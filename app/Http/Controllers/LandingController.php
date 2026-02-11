<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Video;
use App\Models\HeroSection;
use App\Models\Footer;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')
            ->latest()
            ->take(3)
            ->get();
            
        $videos = Video::latest()
            ->take(3)
            ->get();

        $hero = HeroSection::first();

        return view('landing.index', compact('articles', 'videos', 'hero'));
    }

    public function articles()
    {
        $articles = Article::with('category')->latest()->paginate(9);
        return view('landing.articles.index', compact('articles'));
    }

    public function showArticle(Article $article)
    {
        $related_articles = Article::where('category_id', $article->category_id)
            ->where('id', '!=', $article->id)
            ->take(2)
            ->get();
            
        return view('landing.articles.show', compact('article', 'related_articles'));
    }

    public function videos()
    {
        $videos = Video::latest()->paginate(9);
        return view('landing.videos.index', compact('videos'));
    }
}
