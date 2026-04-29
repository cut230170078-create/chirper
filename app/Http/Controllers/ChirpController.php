<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller {

    public function index()
{
    $chirps = [
        [
            'author' => 'Aqsa',
            'message' => 'Halo Laravel',
            'time' => '1 menit lalu'
        ],
        [
            'author' => 'Aqsa',
            'message' => 'Belajar Controller',
            'time' => '5 menit lalu'
        ],
        [
            'author' => 'Aqsa',
            'message' => 'Deploy sukses 🚀',
            'time' => '10 menit lalu'
        ]
    ];

    return view('welcome', ['chirps' => $chirps]);
        
}
}