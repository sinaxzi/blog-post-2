<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index(){

        $posts = Post::latest()->with(['user'])->paginate(20);
        return view('home.index',['posts' => $posts]);

    }
    
    public function show(Post $post){

        return view('posts.show',['post' =>$post]);

    }
    
    public function create(){

        return view('posts.create');

    }

    public function store(Request $request){
        
        $fields = $request->validate([
            'title'=> 'min:6|required|',
            'body'=> 'min:100|required'
        ]);

        auth()->user()->posts()->create([
            'title'=> $fields['title'],
            'body'=> $fields['body']
        ]);

        return redirect()->back();
    }

    public function edit(Post $post){

        // $this->authorize('edit',$post);

        return view('posts.edit',['post'=>$post]);

    }

    public function update(Post $post){

        $fields = request()->validate([
            'title'=> 'min:6|required|',
            'body'=> 'min:100|required'
        ]);
        
        $post->title = $fields['title'];
        $post->body = $fields['body'];

        // $this->authorize('edit',$post);

        $post->save();
        
        // Session::flash('post-updated-message','Post was updated');

        return redirect()->route('user.posts',auth()->user());

    }

    public function destroy(Post $post){

        // $this->authorize('delete',$post);

        $post->delete();

        // Session::flash('post-deleted-message','Post was deleted');


        return redirect()->back();

    }


    
}
