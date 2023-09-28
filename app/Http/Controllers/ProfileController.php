<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(): View
    {
        $data = [
            'name' => 'Marsel',
            'role' => 'web developer'
        ];
        $data['title'] = "My Profil";

        return view('pages.profile.index', compact('data'));
    }
}
