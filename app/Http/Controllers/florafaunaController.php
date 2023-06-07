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

        return view('puzzles.home', compact('puzzles'));
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
        'image' => 'image|max:8192',
        'icon' => 'image|max:4096',
    ]);

    // Periksa apakah input gambar baru telah diberikan
    if ($request->hasFile('image')) {
        // Hapus gambar lama
        Storage::delete($puzzle->image_path);

        // Upload gambar baru
        $imagePath = $request->file('image')->store('public/images');
        $puzzle->image_path = $imagePath;
    }

    // Periksa apakah input ikon baru telah diberikan
    if ($request->hasFile('icon')) {
        // Hapus ikon lama
        Storage::delete($puzzle->icon);

        // Upload ikon baru
        $icon = $request->file('icon')->store('public/images/icon');
        $puzzle->icon = $icon;
    }

    // Update data lainnya
    $puzzle->title = $request->title;
    $puzzle->description = $request->description;
    $puzzle->save();

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
