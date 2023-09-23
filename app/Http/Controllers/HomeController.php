<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $data = [
            'name' => 'Marsel',
            'role' => 'web developer'
        ];

        return view('landing.index', compact('data'));
    }
}
