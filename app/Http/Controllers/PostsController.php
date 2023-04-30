<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends BaseController
{
    /*----view search form----*/
    public function search()
    {
        return view('search');
    }

     /*----view search results----*/
    public function searchResults(Request $request)
    {
        $title = $request->title;
        $posts = DB::table('posts')->where('title', '=', $title)->simplePaginate('10');
        return view('search-results', compact("posts"));
    }
}
