<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaranaController extends Controller
{
    public function index()
    {
        $sarana = Sarana::first();
        return view('layanan.sarana.index', compact('sarana'));
    }

    public function create()
    {
        return view('layanan.sarana.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sarana', 'public');
            $data['image'] = $imagePath;
        }

        Sarana::create($data);
        return redirect()->route('sarana.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Sarana $sarana)
    {
        return view('layanan.sarana.edit', compact('sarana'));
    }

    public function update(Request $request, Sarana $sarana)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            if ($sarana->image) {
                Storage::disk('public')->delete($sarana->image);
            }
            $imagePath = $request->file('image')->store('sarana', 'public');
            $data['image'] = $imagePath;
        }

        $sarana->update($data);
        return redirect()->route('sarana.index')->with('success', 'Data berhasil diperbarui');
    }
} 