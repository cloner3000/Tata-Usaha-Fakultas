<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;
use App\DetailPKL;

class LetterController extends Controller
{

    public function apply(Request $request)
    {
        $mahasiswa = Mahasiswa::create([
            'nama_mahasiswa' => $request->nama,
            'nim' => $request->nim,
            'kode_prodi' => $request->prodi,
            'alamat' => $request->alamat
        ]);

        switch ($request->type) {
            case 'pkl':
                $detail_pkl = new DetailPKL([
                    'mahasiswa_id' => $mahasiswa->id,
                    'nama_instansi' => $request->nama_instansi,
                    'alamat_instansi' => $request->alamat_instansi
                ]);
                $mahasiswa->detailPKL()->save($detail_pkl);
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
        
        return view('welcome');
    }
}
