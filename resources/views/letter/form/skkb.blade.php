@extends('letter.form.form_identitas')

@section('page-title', 'Keterangan Kelakuan Baik')

@section('detail-form')
<div class="form-group">
	<label class="col-md-3 control-label" for="kpr_sak">Untuk Keperluan</label>
	<div class="col-md-6">
		<textarea class="form-control" id="kpr_sak" name="kpr_sak" placeholder="" rows="5"></textarea>
	</div>
</div>
@endsection