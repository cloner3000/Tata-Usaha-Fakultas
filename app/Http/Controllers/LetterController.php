<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\DetailPKL;

class LetterController extends Controller
{
    public function index(Type $var = null)
    {
        # code...
    }

    public function suratPKL()
    {
        return view('letter.form.kerjaPraktik');
    }
    public function apply(Request $request)
    {
        Mahasiswa::create([
            'nama_mahasiswa' => $request->nama,
            'nim' => $request->nim,
            'program_studi' => $request->prodi,
            'alamat_mahasiswa' => $request->alamat
        ]);

        switch ($request->type) {
            case 'pkl':
                DetailPKL::create([
                    'nama_instansi' => $request->tmp_pkl,
                    'alamat_instansi' => $request->alm_pkl
                ]);
                break;
            case 'aktif-kuliah':
                # code...
                break;
            case 'izin-penelitian':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        
        return redirect('welcome');
    }
}
