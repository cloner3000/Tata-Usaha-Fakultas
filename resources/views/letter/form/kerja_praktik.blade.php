@extends('letter.form.form_identitas')

@section('page-title', 'Praktek Kerja Lapangan')

@section('detail-form')
<div class="form-group">
	<label class="col-md-3 control-label" for="nama_instansi">Nama Instansi/Lembaga</label>
	<div class="col-md-6">
		<input class="form-control" id="nama_instansi" name="nama_instansi" placeholder="" rows="5">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="alamat_instansi">Alamat Instansi</label>
	<div class="col-md-6">
		<textarea class="form-control" id="alamat_instansi" name="alamat_instansi" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection