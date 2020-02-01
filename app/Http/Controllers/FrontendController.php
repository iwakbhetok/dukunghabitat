<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Subscriber;

class FrontendController extends Controller
{
    public function index(){
        $posts = Post::where(['status' => 'published'])->orderBy('created_at', 'desc')->get();
        return view('client.home', compact('posts'));
    }

    public function subscribe(Request $request){
        $email = $request->email;
        $result = Subscriber::create([
            "email" => $email,
            "status" =>  "subscribe"
        ]);
        return response()->json(['success'=> true]);
    }
}
