<?php

namespace App\Cells;

use App\Models\KategoriModel;

class ArtikelTerkini
{
     public function show()
    {
        $model = new KategoriModel();
        $kategori = $model->findAll(); 

        return view('components/artikel_terkini', ['kategori' => $kategori]);
    }
}