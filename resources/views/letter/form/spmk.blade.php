@extends('letter.form.form_identitas')

@section('page-title', 'Pernyataan Masih Kuliah')

@section('detail-form')
<div class="form-group">
	<label class="col-md-3 control-label" for="nama_ortu">Nama Orang Tua</label>
	<div class="col-md-6">
		<input id="nama_ortu" name="nama_ortu" type="text" placeholder="" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="nip">NIP</label>
	<div class="col-md-6">
		<input id="nip" name="nip" type="text" placeholder="" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="pangkat">Pangkat/Golongan</label>
	<div class="col-md-6">
		<input id="pangkat" name="pangkat" type="text" placeholder="" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="nama_instansi">Instansi</label>
	<div class="col-md-6">
		<textarea class="form-control" id="nama_instansi" name="nama_instansi" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection