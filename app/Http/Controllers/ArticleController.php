<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use App\Slider;
use Share;

class ArticleController extends Controller
{
    public function index($slug){
        $article_detail = Post::where('slug', $slug)->first();
        $sliders = Slider::where(['status' => 'Enable'])->limit(3)->get();
        $posts = Post::all();
        if($article_detail == NULL){
            return abort(404);
        }
        return view('client.detail_article', ['article' => $article_detail, 'posts' => $posts, 'sliders' => $sliders ]);
    }

    public function searchTopic(Request $request){
        $keyword = $request->keyword;
        $article = Post::where('title', 'like', '%' . $keyword . '%')
                ->orderBy('created_at', 'desc')
                ->first();
        $posts = Post::all();
        $sliders = Slider::where(['status' => 'Enable'])->limit(3)->get();
        if($article != NULL){
            return redirect('/'.$article->slug);
        }
        else{
            return view('client.search-result', compact( 'posts', 'sliders'));
        }
    }
}
