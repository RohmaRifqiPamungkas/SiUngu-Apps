<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();
        return view('pages.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('pages.announcements.create');
    }

    public function show($id)
    {
        $announcement = Announcement::findOrFail($id);

        // Pastikan menggunakan $announcement di sini
        return view('pages.announcements.show', compact('announcement'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Announcement::create($request->all());

        return redirect()->route('pages.announcements.index')
            ->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('pages.announcements.edit', compact('announcement'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $announcement = Announcement::findOrFail($id);
        $announcement->update($request->all());

        return redirect()->route('pages.announcements.index')
            ->with('success', 'Pengumuman berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $announcement = Announcement::findOrFail($id);
        $announcement->delete();

        return redirect()->route('pages.announcements.index')
            ->with('success', 'Pengumuman berhasil dihapus.');
    }
}
