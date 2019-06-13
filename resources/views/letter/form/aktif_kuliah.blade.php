@extends('letter.form.form_identitas')

@section('page-title', 'Aktif Kuliah')

@section('detail-form')
<input type="hidden" name="tipe-surat" value="aktif-kuliah">
<div class="form-group">
	<label class="col-md-3 control-label" for="keperluan">Untuk Keperluan</label>
	<div class="col-md-6">
		<textarea class="form-control" id="keperluan" name="keperluan" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection