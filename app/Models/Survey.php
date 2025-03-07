<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $table = 'surveys';
    protected $fillable = ['rating'];

    public static function getRatingCounts()
    {
        return [
            'tidak_puas' => self::where('rating', 'tidak_puas')->count(),
            'kurang_puas' => self::where('rating', 'kurang_puas')->count(),
            'cukup_puas' => self::where('rating', 'cukup_puas')->count(),
            'puas' => self::where('rating', 'puas')->count(),
            'sangat_puas' => self::where('rating', 'sangat_puas')->count(),
        ];
    }
} 