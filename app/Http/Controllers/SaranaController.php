<?php

namespace App\Http\Controllers;

use App\Models\Sarana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaranaController extends Controller
{
    public function index()
    {
        $saranas = Sarana::orderBy('created_at', 'desc')->get();
        return view('layanan.sarana.index', compact('saranas'));
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

        try {
            $data = $request->all();
            
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('sarana', 'public');
                $data['image'] = $imagePath;
            }

            // Buat data baru tanpa menghapus data lama
            Sarana::create($data);

            return redirect()->route('sarana.index')
                ->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage())
                ->withInput();
        }
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

    public function detail()
    {
        $saranas = Sarana::orderBy('created_at', 'desc')->get();
        return view('layanan.sarana.detail', compact('saranas'));
    }

    public function destroy(Sarana $sarana)
    {
        try {
            // Hapus gambar jika ada
            if ($sarana->image) {
                Storage::disk('public')->delete($sarana->image);
            }
            
            $sarana->delete();
            
            return redirect()->route('sarana.index')
                ->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Terjadi kesalahan saat menghapus data');
        }
    }
} 