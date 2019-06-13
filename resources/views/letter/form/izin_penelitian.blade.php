@extends('letter.form.form_identitas')

@section('page-title', 'Izin Penelitian')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="izin-penelitian">
<div class="form-group">
	<label class="col-md-3 control-label" for="lokasi_penelitian">Nama Instansi/Tempat Penelitian</label>
	<div class="col-md-6">
		<textarea class="form-control" id="lokasi_penelitian" name="lokasi_penelitian" placeholder="" rows="5"></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="alamat_lokasi">Alamat Penelitian</label>
	<div class="col-md-6">
		<textarea class="form-control" id="alamat_lokasi" name="alamat_lokasi" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection