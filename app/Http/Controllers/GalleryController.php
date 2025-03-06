<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::images()->orderBy('created_at', 'desc')->get();
        $videos = Gallery::videos()->orderBy('created_at', 'desc')->get();
        return view('gallery.index', compact('galleries', 'videos'));
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
        $galleries = Gallery::images()->orderBy('created_at', 'desc')->paginate(12);
        $videos = Gallery::videos()->orderBy('created_at', 'desc')->take(3)->get();
        return view('gallery.show', compact('galleries', 'videos'));
    }

    public function storeVideo(Request $request)
    {
        $request->validate([
            'youtube_url' => 'required|url'
        ]);

        try {
            // Extract YouTube video ID
            preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $request->youtube_url, $matches);
            
            if (!isset($matches[1])) {
                return back()->with('error', 'URL YouTube tidak valid');
            }

            // Get video title from YouTube oEmbed API
            $response = Http::get("https://www.youtube.com/oembed", [
                'url' => $request->youtube_url,
                'format' => 'json'
            ]);

            $title = 'Untitled Video';
            if ($response->successful()) {
                $videoData = $response->json();
                $title = $videoData['title'] ?? 'Untitled Video';
            }

            // Save to database sesuai struktur tabel galleries
            Gallery::create([
                'title' => $title,
                'youtube_url' => $request->youtube_url,
                'type' => 'video',
                'image' => null,
                'description' => null,
                'thumbnail' => null // Biarkan null karena kita menggunakan thumbnail YouTube
            ]);

            return back()->with('success', 'Video berhasil ditambahkan');
        } catch (\Exception $e) {
            \Log::error('Error saving video: ' . $e->getMessage());
            return back()->with('error', 'Gagal menambahkan video: ' . $e->getMessage());
        }
    }

    public function updateVideo(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'youtube_url' => 'required|url',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable'
        ]);

        $gallery = Gallery::findOrFail($id);

        $data = [
            'title' => $request->title,
            'youtube_url' => $request->youtube_url,
            'description' => $request->description
        ];

        if ($request->hasFile('thumbnail')) {
            if ($gallery->thumbnail) {
                Storage::disk('public')->delete($gallery->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('video-thumbnails', 'public');
        }

        $gallery->update($data);

        return redirect()->route('gallery.index')->with('success', 'Video berhasil diperbarui');
    }

    public function destroyVideo($id)
    {
        $gallery = Gallery::findOrFail($id);
        
        if ($gallery->thumbnail) {
            Storage::disk('public')->delete($gallery->thumbnail);
        }
        
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Video berhasil dihapus');
    }
} 