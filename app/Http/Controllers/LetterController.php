<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\{Mahasiswa, DetailSKKB, DetailIzinPenelitian, DetailPKL};

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

        switch ($request->tipe_surat) {
            case 'kerja-praktik':
                $detail = new DetailPKL([
                    'mahasiswa_id' => $mahasiswa->id,
                    'nama_instansi' => $request->nama_instansi,
                    'alamat_instansi' => $request->alamat_instansi
                ]);
                $mahasiswa->detailPKL()->save($detail);
                break;
            case 'izin-penelitian':
                $detail = new DetailIzinPenelitian([
                    'mahasiswa_id' => $mahasiswa->id,
                    'lokasi_penelitian' => $request->lokasi_penelitian,
                    'alamat_lokasi' => $request->alamat_lokasi
                ]);
                $mahasiswa->detailIzinPenelitian()->save($detail);
                break;
            case 'aktif-kuliah':
                # code...
                break;
            case 'izin-observasi':
                # code...
                break;
            case 'keterangan-lulus':
                # code...
                break;
            case 'masih-kuliah':
                # code...
                break;
            case 'kelakuan-baik':
                # code...
                break;
            case 'legalisir-ijazah':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        
        return view('welcome');
    }
}
