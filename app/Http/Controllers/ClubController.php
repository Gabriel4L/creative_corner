<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    public function index(){
        return view('club.design');
       }
    public function index2(){
        return view('club.web-design');
       }
    public function index3(){
        return view('club.video-editing');
       }
}
