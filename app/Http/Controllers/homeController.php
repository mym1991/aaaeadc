<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
class homeController extends Controller
{
    //


    public function index(){

        $posts = Post::paginate(5);
        return view('home',['posts'=>$posts]);
    }
}
