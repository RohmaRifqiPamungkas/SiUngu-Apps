<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $photos = Gallery::all();
        return view('pages.gallery.index', compact('photos'));
    }

    public function create()
    {
        return view('pages.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $request->file('photo')->store('photos', 'public');

        Gallery::create([
            'title' => $request->title,
            'photo_path' => $path,
        ]);

        return redirect()->route('pages.gallery.index')
            ->with('success', 'Foto berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $photo = Gallery::findOrFail($id);
        return view('pages.gallery.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photo = Gallery::findOrFail($id);

        if ($request->hasFile('photo')) {
            // Delete old photo
            Storage::disk('public')->delete($photo->photo_path);

            // Store new photo
            $path = $request->file('photo')->store('photos', 'public');
            $photo->photo_path = $path;
        }

        $photo->title = $request->title;
        $photo->save();

        return redirect()->route('pages.gallery.index')
            ->with('success', 'Foto berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $photo = Gallery::findOrFail($id);
        Storage::disk('public')->delete($photo->photo_path);
        $photo->delete();

        return redirect()->route('pages.gallery.index')
            ->with('success', 'Foto berhasil dihapus.');
    }
}
