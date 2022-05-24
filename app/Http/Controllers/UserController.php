<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::join('comments', 'users.email', 'comments.email')
            ->get();

        $users = $users->map(function($da) {
            $da['dibuat'] = Carbon::parse($da->created_at)->diffForHumans();

            return $da;
        });

        Session::flash('info','Selamat datang di menu Users');
        return view('user.index', compact('users'));
    }
}
