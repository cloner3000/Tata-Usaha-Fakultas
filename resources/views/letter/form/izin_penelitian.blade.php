@extends('letter.form.form_identitas')

@section('page-title', 'Izin Penelitian')

@section('detail-form')
<input type="hidden" name="tipe-surat" value="izin-penelitian">
<div class="form-group">
	<label class="col-md-3 control-label" for="tmp_penelitian">Nama Instansi/Tempat Penelitian</label>
	<div class="col-md-6">
		<textarea class="form-control" id="tmp_penelitian" name="tmp_penelitian" placeholder="" rows="5"></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="alm_peneletian">Alamat Penelitian</label>
	<div class="col-md-6">
		<textarea class="form-control" id="alm_peneletian" name="alm_peneletian" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection