<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(): View
    {
        $data = [
            'name' => 'Marselinus Harson Rewo',
            'role' => 'web developer',
            'education' => [
                'sd' => [
                    'year' => '2008',
                    'at' => 'SDK Gurusina',
                ],
                'smp' => [
                    'year' => '2014',
                    'at' => 'SMPS Katolik Yos Soedarso Jerebuu',
                ],
                'sma' => [
                    'year' => '2017',
                    'at' => 'SMAS Katolik Regina Pacis Bajawa',
                ],

                'kuliah' => [
                    'year' => '2017',
                    'at' => 'Universitas Pendidikan Ganesha'
                ],

            ],
            'contact' => [
                'jalan' => 'Jl. Ahmad Yani, Singaraja, Buleleng, Bali 49128',
                'telp' => '0878 - 9488 - 5780',
                'email' => 'marsel@gmail.com'
            ]
        ];
        $data['title'] = "My Profil";

        return view('pages.profile.index', compact('data'));
    }
}
