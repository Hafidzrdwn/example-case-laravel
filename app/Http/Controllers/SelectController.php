<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        $jurusans = Jurusan::all();
        return view('aghna.select', compact('kelas', 'jurusans'));
    }

    public function search_siswa(Request $request)
    {
        $siswas = Siswa::where('kelas_id', $request->kelas)->where('jurusan_id', $request->jurusan)->with('kelas', 'jurusan')->get();
        return response()->json($siswas);
    }
}
