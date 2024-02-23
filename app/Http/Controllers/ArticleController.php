<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function articles($id)
    {
        return "Halaman Artikel dengan Id {$id}";
    }
}
