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
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim' => $request->nim,
            'kode_prodi' => $request->kode_prodi,
            'semester' => $request->semester,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon
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
            case 'skkb':
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
