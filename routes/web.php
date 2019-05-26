<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* endpoint /letter
 |--------------------------------------------------------------------------
 | endpoint yang diakses ketika hendak mengajukan surat resmi dari
 | fakultas. setiap orang yang hendak mengajukan surat resmi dari fakultas
 | akan melalui endpoint ini. kemudian permohonan surat tersebut akan 
 | disimpan oleh sistem yang nantinya diakses oleh karyawan tata usaha 
 | melalui endpoint /administration.
 */
Route::prefix('/pengajuan-surat')->group( function ()
{
    Route::view('/', 'welcome');                                    // Mengarahkan ke halaman pengajuan surat yang dikehendaki
    Route::view('/pkl', 'letter.form.kerja_praktik');               // mengarahkan ke halaman formulir pengajuan Surat Pengantar Kerja Praktik
    Route::view('/pengesahan-ijazah', 'letter.form.ijazah');        // mengarahkan ke halaman formulir pengajuan Surat Keputusan
    Route::view('/izin-observasi', 'letter.form.izin_observasi');   // mengarahkan ke halaman formulir pengajuan Surat Pemohonan Izin Observasi
    Route::view('/izin-penelitian', 'letter.form.izin_penelitian');             // mengarahkan ke halaman formulir pengajuan Surat Pemohonan Izin Penelitian
    Route::view('/keterangan-lulus', 'letter.form.keterangan_lulus');            // mengarahkan ke halaman formulir pengajuan Surat Keterangan Lulus
    Route::view('/skkb', 'letter.form.skkb');               // mengarahkan ke halaman formulir pengajuan Surat Keterangan Berkelakuan Baik
    Route::view('/spmk', 'letter.form.spmk');               // mengarahkan ke halaman formulir pengajuan Surat Pernyataan Masih Kuliah
    // Route::view('/pkl', 'letter.form.kerja_praktik');               // mengarahkan ke halaman formulir pengajuan Surat Pengantar Kerja Praktik
    // Route::view('/pkl', 'letter.form.kerja_praktik');               // mengarahkan ke halaman formulir pengajuan Surat Pengantar Kerja Praktik
    Route::post('/apply', 'LetterController@apply');                // Menyimpan pengajuan surat ke dalam database
});

/* endpoint /signin
 |--------------------------------------------------------------------------
 | endpoint awal sebagai otentifikasi untuk memverifikasi pengguna. tidak
 | semua pengguna dapat masuk ke bagian back office layanan ini. hanya
 | karyawan tata usaha yang telah terdaftar saja yang boleh masuk ke dalam
 | back office sistem.
 */
Auth::routes(['register' => false]);                                // scaffold otentifikasi pengguna, semua route tersedia kecuali register

/* endpoint /admininstration
 |--------------------------------------------------------------------------
 | endpoint back office web yang dapat diakses hanya dari karyawan tata
 | usaha fakultas saja. endpoint ini digunakan untuk mengakses pengajuan
 | surat yang dibuat oleh pemohon, terutama mahasiswa, dari endpoint letter
 | yang telah disimpan ke dalam database. pada endpoint ini juga karyawan
 | tata usaha dapat mencetak laporan jumlah pengajuan surat beserta detail
 | dari setiap pengajuan surat tersebut.
 */
Route::prefix('/administration')->group( function ()
{
    Route::get('/', 'AdminController@index');                       // mengarahkan ke halaman awal back office tata usaha
    Route::get('/report', 'AdminController@report');                // mencetak laporan pengajuan surat
});
