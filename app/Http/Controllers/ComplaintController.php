<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        $complaints = Complaint::orderBy('created_at', 'desc')->get();
        return view('complaints.index', compact('complaints'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string'
        ]);

        Complaint::create($request->all());

        return redirect()->back()->with('success', 'Aduan berhasil dikirim. Terima kasih atas masukan Anda.');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,process,done'
        ]);

        $complaint = Complaint::findOrFail($id);
        $complaint->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status aduan berhasil diperbarui');
    }
} 