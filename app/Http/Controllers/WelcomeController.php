<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\About;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $latestNews = News::latest()->take(6)->get();
        $about = About::first();
        return view('welcome', compact('latestNews', 'about'));
    }
} 