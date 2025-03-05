<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'content' => $request->content
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('about', 'public');
            $data['image'] = $imagePath;
        }

        About::create($data);
        return redirect()->route('about.index')->with('success', 'Konten berhasil ditambahkan');
    }

    public function edit(About $about)
    {
        return view('profil.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = [
            'content' => $request->content
        ];

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($about->image && Storage::disk('public')->exists($about->image)) {
                Storage::disk('public')->delete($about->image);
            }
            
            $imagePath = $request->file('image')->store('about', 'public');
            $data['image'] = $imagePath;
        }

        $about->update($data);
        return redirect()->route('about.index')->with('success', 'Konten berhasil diperbarui');
    }
} 