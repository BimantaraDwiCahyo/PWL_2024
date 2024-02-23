<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'BIMANTARA DWI CAHYO <br> 2241720188';
    }
    public function articles($id)
    {
        return "Halaman Artikel dengan Id {$id}";
    }
}
