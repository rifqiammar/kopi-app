<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        $nama = 'Rifqi Ammar Ramadhan';
        return view('about', ['nama' => $nama]);
    }
}

// Biasanya Pages Cotroller di gunakan untuk membuat halaman statis saja