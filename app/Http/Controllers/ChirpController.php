

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            "Halo Laravel",
            "Belajar Controller",
            "Deploy sukses 🚀"
        ];

        return view('welcome', ['chirps' => $chirps]);
    }
}
