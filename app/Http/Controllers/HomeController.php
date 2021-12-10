<?php

namespace App\Http\Controllers;

use App\Like;
use App\Models\PostForm;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = PostForm::withCount('likes')
            ->orderBy('likes_count', 'desc')
            ->get();
        return view('home', compact('posts'));
    }
}
