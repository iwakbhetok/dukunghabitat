<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function generate()
    {
        $result = SitemapGenerator::create(config('app.url'))->writeToFile('sitemap.xml');
        // $result = "";
        return view('/vendor/voyager/generate-sitemap', compact('result'));
    }
}
