<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    function createArticle()
    {
        $data=Article::create([
            "title"=>"test",
            "body"=>"body test"
        ]);
        // return 'article created';
      return response()->json($data, 201);
    }
}
