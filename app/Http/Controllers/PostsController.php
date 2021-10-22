<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;
class PostsController extends Controller
{
    public function index()
    {
        $posts = posts::paginate(6);
        // $posts = DB::table('posts')->get();
        return view('gallery.index',compact('posts'));
    }
    public function store(Request $request)
    {
        DB::table('posts')->insert([
            'file' => $request->file,
            'title' => $request->title,
            'desc' => $request->desc
        ]);
        return redirect('/gallery');
    }

}
