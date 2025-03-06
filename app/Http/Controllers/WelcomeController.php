<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\About;
use App\Models\Gallery;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $latestNews = News::latest()->take(3)->get();
        $about = About::first();
        
        $videos = Gallery::where('type', 'video')
                        ->latest()
                        ->take(3)
                        ->get();

        return view('welcome', compact('latestNews', 'about', 'videos'));
    }
} 