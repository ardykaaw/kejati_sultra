<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $query = News::query();
        
        // Search functionality
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('short_description', 'LIKE', "%{$searchTerm}%");
            });
        }
        
        // Get paginated results
        $news = $query->latest()->paginate(10);
        
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'short_description' => 'required',
            'content' => 'required'
        ]);

        $thumbnail = $request->file('thumbnail')->store('news', 'public');

        News::create([
            'title' => $request->title,
            'thumbnail' => $thumbnail,
            'short_description' => $request->short_description,
            'content' => $request->content
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan');
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
            'short_description' => 'required',
            'content' => 'required'
        ]);

        $news = News::findOrFail($id);

        if ($request->hasFile('thumbnail')) {
            Storage::disk('public')->delete($news->thumbnail);
            $thumbnail = $request->file('thumbnail')->store('news', 'public');
        } else {
            $thumbnail = $news->thumbnail;
        }

        $news->update([
            'title' => $request->title,
            'thumbnail' => $thumbnail,
            'short_description' => $request->short_description,
            'content' => $request->content
        ]);

        return redirect()->route('news.index')->with('success', 'Berita berhasil diperbarui');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);
        Storage::disk('public')->delete($news->thumbnail);
        $news->delete();

        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function allNews()
    {
        $allNews = News::orderBy('created_at', 'desc')->paginate(9);
        return view('news.all', compact('allNews'));
    }
} 