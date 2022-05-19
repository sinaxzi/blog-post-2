<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function myposts(User $user){

        $posts = $user->posts()->with(['user'])->paginate(20);

        return view('user.myposts',['user'=>$user,'posts'=>$posts]);

    }

    public function profile(User $user){

        return view('user.profile',['user'=>$user]);
    }

    public function profileUpdate(User $user){
        
        $fields = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|',
            'email' => 'required|max:255|email',
        ]);

        if(request('password') ){
            $user->password = Hash::make(request('password'));
        }

        $user->name = $fields['name'];
        $user->username = $fields['username'];
        $user->email = $fields['email'];
        

        // $this->authorize('edit',$post);

        $user->save();
        
        // Session::flash('post-updated-message','Post was updated');

        return redirect()->back();
    }
}
