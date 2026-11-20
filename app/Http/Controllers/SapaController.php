<?php

namespace App\Http\Controllers;

class SapaController extends Controller
{
    public function index()
    {
        $nama = 'Anjar Satio';

        return view('pages.sapa', [
            'nama' => $nama,
        ]);
    }
}
