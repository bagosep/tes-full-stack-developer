<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->get();

        $posts = $posts->map(function($da) {
            $da['dibuat'] = Carbon::parse($da->created_at)->diffForHumans();

            return $da;
        });

        Session::flash('info','Selamat datang di menu Posts');
        return view('post.index', compact('posts'));
    }

}
