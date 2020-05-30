<?php
namespace App\Post;


namespace App\Http\Controllers;

use App\Post;
use DB;

class PostsController extends Controller
{
    public function show($id)
    {
        // $post = DB::table('posts')->where('id', $id)->first();
        return view('test',['post'=> Post::where('id',$id)->firstOrFail()]);
    }
}
