<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();
        return view('gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable'
        ]);

        $image = $request->file('image')->store('gallery', 'public');

        Gallery::create([
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description
        ]);

        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil ditambahkan');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable'
        ]);

        $gallery = Gallery::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($gallery->image);
            $image = $request->file('image')->store('gallery', 'public');
        } else {
            $image = $gallery->image;
        }

        $gallery->update([
            'title' => $request->title,
            'image' => $image,
            'description' => $request->description
        ]);

        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        Storage::disk('public')->delete($gallery->image);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Galeri berhasil dihapus');
    }

    public function show()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(12);
        return view('gallery.show', compact('galleries'));
    }
} 