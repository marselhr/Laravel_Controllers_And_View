<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class InformasiKampusController extends Controller
{
    public function index(): View
    {
        $data['kampus'] =  [
            'nama' => "Universitas Pendidikan Ganesha",
            'alamat' => "Jalan Udayana No.11 Singaraja - Bali 81116",
            'web' => 'undiksha.ac.id'
        ];
        $data['title'] = "Informasi Kampus";
        return view('pages.kampus.index', compact('data'));
    }
}
