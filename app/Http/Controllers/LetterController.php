<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\{Mahasiswa, DetailSKKB, DetailIzinPenelitian, DetailPKL, DetailMasihKuliah};

class LetterController extends Controller
{

    public function apply(Request $request)
    {
        $mahasiswa = Mahasiswa::firstOrCreate(
            ['nim' => $request->nim],
            ['nama_mahasiswa' => $request->nama_mahasiswa,
            'kode_prodi' => $request->kode_prodi,
            'semester' => $request->semester,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon]
        );

        switch ($request->tipe_surat)
        {
            case 'kerja-praktik':
                $detail_surat = DetailPKL::create([
                    'nama_instansi' => $request->nama_instansi,
                    'alamat_instansi' => $request->alamat_instansi
                ]);
                break;
            case 'izin-penelitian':
                $detail = DetailIzinPenelitian::create([
                    'lokasi_penelitian' => $request->lokasi_penelitian,
                    'alamat_lokasi' => $request->alamat_lokasi
                ]);
                $mahasiswa->detailIzinPenelitian()->save($detail);
                break;
            case 'masih-kuliah':
                $detail = DetailMasihKuliah::create([
                    'nama_orang_tua' => $request->nama_orang_tua,
                    'nip_orang_tua' => $request->nip_orang_tua,
                    'pangkat_golongan' => $request->pangkat_golongan,
                    'nama_instansi' => $request->nama_instansi
                ]);
                break;
            case 'aktif-kuliah':
                # code...
                break;
            case 'izin-observasi':
                $detail = DetailMasihKuliah::create([
                    'mata_kuliah' => $request->mata_kuliah,
                    'lokasi_observasi' => $request->lokasi_observasi
                ]);
                break;
            case 'keterangan-lulus':
                # code...
                break;
            case 'kelakuan-baik':
                $detail = DetailSKKB::create([
                    'keperluan' => $request->lokasi_penelitian
                ]);
                break;
            case 'legalisir-ijazah':
                # code...
                break;
            
            default:
                # code...
                break;
        }
        // 'mahasiswa_id' => $mahasiswa->id,
        
        return view('welcome');
    }
}
