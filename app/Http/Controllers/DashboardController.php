<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Posts;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = posts::paginate(6);
        // $posts = DB::table('posts')->get();
        return view('index',compact('posts'));
    }
}
