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
        $posts = posts::paginate(8);
        // $posts = DB::table('posts')->get();
        return view('gallery',['posts'=>$posts]);
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

    public function index2($id)
    {
        $posts = posts::where('id', $id)->get();
        return view('/detail',['posts'=>$posts]);
    }
    public function destroy($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return redirect('/gallery');
    }
    public function edit($id)
    {
        $posts = DB::table('posts')->where('id',$id)->get();
        return view('gallery.edit',['posts' => $posts]);
    }
    public function update(Request $request, $id)
    {
        DB::table('posts')->where('id',$request->id)->update([
            'title' => $request->title,
            'file' => $request->file,
            'desc' => $request->desc
        ]);
    return redirect('/gallery');
    }
}
