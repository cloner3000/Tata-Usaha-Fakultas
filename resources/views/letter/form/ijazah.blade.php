@extends('letter.form.form_identitas')

@section('page-title', 'Legalisir Ijazah/Transkrip Nilai')

@section('detail-form')
<input type="hidden" name="tipe_surat" value="legalisir-ijazah">
<div class="form-group">
	<label class="col-md-3 control-label" for="tgl_sidang">Tanggal Sidang</label>
	<div class="col-md-6">
		<div class="input-group date">
			<div class="input-group-addon">
				<span class="glyphicon glyphicon-th"></span>
			</div>
			<input placeholder="yyyy/mm/dd" type="text" class="form-control datepicker" name="tgl_sidang">
		</div>
	</div>
</div>
@endsection