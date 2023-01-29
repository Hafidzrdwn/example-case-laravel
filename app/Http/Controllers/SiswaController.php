<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::orderBy('nama', 'asc')->get();
        return view('firta.index', compact('siswas'));
    }
}
