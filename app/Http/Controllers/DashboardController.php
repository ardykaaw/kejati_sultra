<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Gallery;
use App\Models\Survey;

class DashboardController extends Controller
{
    public function index()
    {
        try {
            // Hitung total berita
            $totalNews = News::count();
            
            // Hitung total foto dan video
            $totalImages = Gallery::where('type', 'image')->count();
            $totalVideos = Gallery::where('type', 'video')->count();
            
            // Hitung total responden survey
            $totalSurvey = Survey::count();
            
            // Hitung persentase perubahan dari bulan lalu untuk berita
            $lastMonthNews = News::whereMonth('created_at', '=', now()->subMonth()->month)->count();
            $newsPercentage = $lastMonthNews > 0 ? 
                round((($totalNews - $lastMonthNews) / $lastMonthNews) * 100) : 0;

            return view('dashboard', compact(
                'totalNews',
                'totalImages',
                'totalVideos',
                'totalSurvey',
                'newsPercentage'
            ));
        } catch (\Exception $e) {
            // Jika terjadi error, tampilkan dashboard dengan data kosong
            return view('dashboard', [
                'totalNews' => 0,
                'totalImages' => 0,
                'totalVideos' => 0,
                'totalSurvey' => 0,
                'newsPercentage' => 0
            ]);
        }
    }
} 