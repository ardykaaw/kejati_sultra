<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        $ratingCounts = Survey::getRatingCounts();
        $total = array_sum($ratingCounts);
        
        return view('survey.index', compact('ratingCounts', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|in:tidak_puas,kurang_puas,cukup_puas,puas,sangat_puas'
        ]);

        Survey::create([
            'rating' => $request->rating
        ]);

        return redirect()->route('survey.index')
            ->with('success', 'Terima kasih atas penilaian Anda!');
    }
} 