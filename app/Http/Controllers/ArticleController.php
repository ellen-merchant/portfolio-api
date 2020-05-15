<?php

namespace App\Http\Controllers;

use App\Http\Transformers\ArticleTransformer;
use App\Portfolio\Articles\GetArticles;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private GetArticles $getArticles;
    private ArticleTransformer $transformer;

    public function __construct(GetArticles $getArticles, ArticleTransformer $transformer)
    {
        $this->getArticles = $getArticles;
        $this->transformer = $transformer;
    }

    public function index()
    {
        $articles = $this->getArticles->get();

        return response()->json($this->transformer->transformMultiple($articles));
    }

    public function paginate(Request $request)
    {
        $activities = $this->getArticles->paginate($request->get('limit', 10));

        return response()->json($this->transformer->transformPagination($activities));
    }
}
