<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class TableController extends Controller
{
    public function getTable() {
        $posts = Post::with('user')->get();
        return view('table', compact('posts'));
     
    }
    public function getChart() {
        $result = Post::join('users', 'posts.user_id', '=', 'users.id')
        ->selectRaw("posts.user_id,count(posts.id) as posts, users.name as name")
        ->groupBy('posts.user_id', 'users.name')
        ->orderBy('posts','DESC')
        ->where('posts.created_at', '>', Carbon::now()->subDays(7))
        ->limit('5')
        ->get();
        return $result;
    }
}
