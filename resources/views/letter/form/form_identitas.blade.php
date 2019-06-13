@extends('letter.form.master')

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Form Pengajuan Surat</li>
		</ol>
	</div><!--/.row-->
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Form Pengajuan Surat @yield('page-title')</h1>
		</div>
	</div><!--/.row-->
	
	<div class="panel panel-container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="alert bg-danger" role="alert"><em class="fa fa-lg fa-warning">&nbsp;</em> Perhatian! Penulisan Instansi tujuan harus jelas. </em></div>
						<div>Isi form dibawah ini secara lengkap.</div>
						<div>
							<div class="panel-body">
								<form id="pengajuan-surat" class="form-horizontal" action="/pengajuan-surat/apply" method="post">
									@csrf
									<fieldset>
										<div class="form-group">
											<label class="col-md-3 control-label" for="nama_mahasiswa">Nama</label>
											<div class="col-md-6">
												<input id="nama_mahasiswa" name="nama_mahasiswa" type="text" placeholder="Isi dengan nama lengkap Anda. Contoh: Asep Hidayat Ramdani" class="form-control">
											</div>
										</div>
									
										<div class="form-group">
											<label class="col-md-3 control-label" for="nim">NIM</label>
											<div class="col-md-6">
												<input id="nim" name="nim" type="text" placeholder="Isi dengan Nomor Induk Mahasiswa Anda. Contoh: 1234050123" class="form-control">
											</div>
										</div>
										
										<!-- <div class="form-group">
											<label class="col-md-3 control-label" for="kode_prodi">Program Studi</label>
											<div class="col-md-6">
												<input id="kode_prodi" name="kode_prodi" type="text" placeholder="" class="form-control">
											</div>
										</div> -->
										<div class="form-group">
											<label class="col-md-3 control-label" for="kode_prodi">Program Studi</label>
											<div class="col-md-6">
											<select id="kode_prodi" name="kode_prodi" class="form-control" form="pengajuan-surat">
												<option disabled selected hidden>Pilih Program Studi Anda</option>
												<option value="401">Bimbingan Konseling Islam</option>
												<option value="402">Komunikasi dan Penyiaran Islam</option>
												<option value="403">Manajemen Dakwah</option>
												<option value="404">Pengembangan Masyarakat Islam</option>
												<option value="405">Ilmu Komunikasi Jurnalistik</option>
												<option value="406">Ilmu Komunikasi Humas</option>
											</select>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="semester">Semester</label>
											<div class="col-md-6">
												<input id="semester" name="semester" type="text" placeholder="Isi dengan semester yang Anda jalani. Contoh: VIII" class="form-control">
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="tanggal_lahir">Tanggal Lahir</label>
											<div class="col-md-6">
												<div class="input-group date">
													<div class="input-group-addon">
														<span class="glyphicon glyphicon-th"></span>
													</div>
													<input id="tanggal_lahir" placeholder="1970-01-01" type="text" class="form-control datepicker" name="tanggal_lahir">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="alamat">Alamat</label>
											<div class="col-md-6">
												<textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat Anda tinggal sekarang" rows="5"></textarea>
											</div>
										</div>

										<div class="form-group">
											<label class="col-md-3 control-label" for="no_telepon">Telepon</label>
											<div class="col-md-6">
												<input id="no_telepon" name="no_telepon" type="text" placeholder="Masukkan nomor telepon yang dapat dihubungi" class="form-control">
											</div>
										</div>
										@yield('detail-form')
										<!-- Form actions -->
										<div class="form-group">
											<div class="col-md-6 widget-right">
												<button type="submit" class="btn btn-primary btn-md pull-right">Submit</button>
											</div>
											<div class="col-md-6 widget-right">
												<button type="reset" class="btn btn-danger btn-md pull-left">Reset</button>
											</div>
										</div>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>
</div>	<!--/.main-->
@endsection