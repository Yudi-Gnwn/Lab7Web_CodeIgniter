<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            ]);
    }
    public function artikel()
    {
        return view('artikel', [
            'title' => 'Artikel',
            ]);
    }
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman about yang menjelaskan tentang isi
            halaman ini....'
            ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Kontak',
            ]);
    }
}