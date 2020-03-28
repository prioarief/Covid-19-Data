<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InfoController extends Controller
{
    public function indonesia()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        return view('indonesia', compact('data'));
    }

    public function global()
    {
        $response = Http::get('https://api.kawalcorona.com/');
        $data = $response->json();
        return view('global', compact('data'));
    }
}
