<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Announcement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $photos = Gallery::all();
        $announcements = Announcement::latest()->take(5)->get(); // Contoh mengambil 5 pengumuman terbaru

        return view('pages.dashboard', compact('photos', 'announcements'));
    }
}
