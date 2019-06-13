@extends('letter.form.form_identitas')

@section('page-title', 'Izin Observasi')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="izin-observasi">
<div class="form-group">
	<label class="col-md-3 control-label" for="matkul">Mata Kuliah</label>
	<div class="col-md-6">
		<input id="matkul" name="matkul" type="text" placeholder="" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="tmp_observasi">Tempat Observasi</label>
	<div class="col-md-6">
		<textarea class="form-control" id="tmp_observasi" name="tmp_observasi" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection