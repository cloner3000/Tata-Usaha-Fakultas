@extends('letter.form.form_identitas')

@section('page-title', 'Keterangan Lulus')

@section('detail-form')
<div class="form-group">
	<label class="col-md-3 control-label" for="tgl_lulus">Tanggal Lulus (Munaqosyah)</label>
	<div class="col-md-6">
		<div class="input-group date">
			<div class="input-group-addon">
				<span class="glyphicon glyphicon-th"></span>
			</div>
			<input placeholder="yyyy/mm/dd" type="text" class="form-control datepicker" name="tgl_lulus">
		</div>
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="jdl_skripsi">Judul Skripsi</label>
	<div class="col-md-6">
		<textarea class="form-control" id="jdl_skripsi" name="jdl_skripsi" placeholder="" rows="5"></textarea>
	</div>
</div>

<div class="form-group">
	<label class="col-md-3 control-label" for="ipk">Yudisium/IPK</label>
	<div class="col-md-6">
		<input id="ipk" name="ipk" type="text" placeholder="" class="form-control">
	</div>
</div>
@endsection