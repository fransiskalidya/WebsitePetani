<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function artikel1()
    {
        return view('sebelum.article.artikel1');
    }

    public function artikel2()
    {
        return view('sebelum.article.artikel2');
    }

    public function artikel3()
    {
        return view('sebelum.article.artikel3');
    }

    public function populer1()
    {
        return view('sebelum.article.populer1');
    }

    public function populer2()
    {
        return view('sebelum.article.populer2');
    }

    public function populer3()
    {
        return view('sebelum.article.populer3');
    }
}
       