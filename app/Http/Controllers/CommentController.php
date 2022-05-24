<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUserAvailable = Comment::join('users', 'users.email', 'comments.email')
            ->pluck('comments.id')->toArray();

        $users = Comment::whereNotIn('id', $idUserAvailable)->get();

        $users = $users->map(function($da) {
            $da['dibuat'] = Carbon::parse($da->created_at)->diffForHumans();

            return $da;
        });

        Session::flash('info', 'Selamat datang di menu Comment');
        return view('comment.index', compact('users'));
    }
}
