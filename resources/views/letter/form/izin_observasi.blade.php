@extends('letter.form.form_identitas')

@section('page-title', 'Izin Observasi')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="izin-observasi">
<div class="form-group">
	<label class="col-md-3 control-label" for="mata_kuliah">Mata Kuliah</label>
	<div class="col-md-6">
		<input id="mata_kuliah" name="mata_kuliah" type="text" placeholder="" class="form-control">
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="lokasi_observasi">Lokasi Observasi</label>
	<div class="col-md-6">
		<textarea class="form-control" id="lokasi_observasi" name="lokasi_observasi" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection