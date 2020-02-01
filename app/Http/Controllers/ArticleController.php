<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class ArticleController extends Controller
{
    public function index($slug){
        $article_detail = Post::where('slug', $slug)->first();
        $posts = Post::all();
        if($article_detail == NULL){
            return abort(404);
        }
        return view('client.detail_article', ['article' => $article_detail, 'posts' => $posts ]);
    }

    public function searchTopic(Request $request){
        $keyword = $request->keyword;
        $article = Post::where('title', 'like', '%' . $keyword . '%')
                ->orderBy('created_at', 'desc')
                ->first();
        $posts = Post::all();
        if($article != NULL){
            return redirect('/'.$article->slug);
            // return view('client.search-result', compact('articles', 'posts'));
        }
        else{
            return view('client.search-result', compact( 'posts'));
        }
    }
}
