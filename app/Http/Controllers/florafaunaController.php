<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\florafauna;
use Illuminate\Support\Facades\Storage;

class florafaunaController extends Controller
{
    public function index()
    {
        $puzzles = florafauna::all();

        return view('puzzles.index', compact('puzzles'));
    }

    public function create()
    {
        return view('puzzles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:8192',
        ]);

        $imagePath = $request->file('image')->store('public/images');
        $icon = $request->file('icon')->store('public/images/icon');

        florafauna::create([
            'title' => $request->title,
        'description' => $request->description,
        'image_path' => $imagePath,
        'icon' => $icon,
        ]);

        return redirect()->route('puzzles.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $puzzle = florafauna::findOrFail($id);

        return view('puzzles.edit', compact('puzzle'));
    }

    public function update(Request $request, string $id)
    {
        $puzzle = florafauna::findOrFail($id);

        $request->validate([
            'title' => 'required',
        'description' => 'required',
            'image' => 'required|image|max:8192',
            'icon' => 'required|image|max:4096',
        ]);

        // Hapus gambar lama
        Storage::delete($puzzle->image_path);

        $imagePath = $request->file('image')->store('public/images');
        $icon = $request->file('icon')->store('public/images/icon');

        $puzzle->update([
            'title' => $request->title,
        'description' => $request->description,
            'image_path' => $imagePath,
            'icon' => $icon,
        ]);

        return redirect()->route('puzzles.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $puzzle = florafauna::findOrFail($id);

        // Hapus gambar dari storage
        Storage::delete($puzzle->image_path);
        Storage::delete($puzzle->icon);


        $puzzle->delete();

        return redirect()->route('puzzles.index')->with('success', 'Data berhasil dihapus');
    }
}
