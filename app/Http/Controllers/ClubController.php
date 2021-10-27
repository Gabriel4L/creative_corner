<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class ClubController extends Controller
{
    public function index(){
        $posts = posts::paginate(8);
        // $posts = DB::table('posts')->get();
        return view('club.design',['posts'=>$posts]);
       }
    public function index2(){
        $posts = posts::paginate(8);
        return view('club.web-design',['posts'=>$posts]);
       }
    public function index3(){
        $posts = posts::paginate(8);
        return view('club.video-editing',['posts'=>$posts]);
       }
}
