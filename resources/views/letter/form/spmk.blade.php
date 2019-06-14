@extends('letter.form.form_identitas')

@section('page-title', 'Pernyataan Masih Kuliah')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="masih-kuliah">
<div class="form-group">
	<label class="col-md-3 control-label" for="nama_orang_tua">Nama Orang Tua</label>
	<div class="col-md-6">
		<input id="nama_orang_tua" name="nama_orang_tua" type="text" placeholder="Isi dengan nama lengkap orang tua Anda beserta gelar" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="nip_orang_tua">NIP Orang Tua</label>
	<div class="col-md-6">
		<input id="nip_orang_tua" name="nip_orang_tua" type="text" placeholder="Isi dengan nomor induk pegawai orang tua Anda" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="pangkat_golongan">Pangkat/Golongan</label>
	<div class="col-md-6">
		<input id="pangkat_golongan" name="pangkat_golongan" type="text" placeholder="Isi dengan pangkat dan golongan orang tua Anda. Contoh: IV-B/ Pembina Tk.I" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="nama_instansi">Instansi</label>
	<div class="col-md-6">
		<input class="form-control" id="nama_instansi" name="nama_instansi" placeholder="isi dengan nama instansi tenpat orang tua anda bekerja. Contoh: UIN Sunan Gunung Djati Bandung"></input>
	</div>
</div>
@endsection