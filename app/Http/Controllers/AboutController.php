<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first();
        return view('profil.about.index', compact('about'));
    }

    public function create()
    {
        return view('profil.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        About::create($request->all());
        return redirect()->route('about.index')->with('success', 'Konten berhasil ditambahkan');
    }

    public function edit(About $about)
    {
        return view('profil.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'content' => 'required'
        ]);

        $about->update($request->all());
        return redirect()->route('about.index')->with('success', 'Konten berhasil diperbarui');
    }
} 