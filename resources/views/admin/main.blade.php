@extends('admin.master')

@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
            <li class="active">Data Surat</li>
        </ol>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Data Surat</h1>
        </div>
    </div><!--/.row-->
    
    <div class="panel panel-container">
        <div class="row">
                <!-- class="col-xs-6 col-md-3 col-lg-3 no-padding" -->
            <div> 
                <div class="panel panel-teal panel-widget border-right">
                    <div class="row no-padding">
                        <em class="fa fa-5x fa-envelope-square color-blue"></em>
                        <div class="large">Data Pengajuan Surat</div>
                        <!-- <div class="text-muted">New Orders</div> -->
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Forms</div> -->
                <div class="panel-body">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="nama">Name</label>
                                <div class="col-md-4">
                                    <input id="nama" name="nama" type="text" placeholder="" class="form-control">
                                </div>
                                <label class="col-md-1 control-label" for="status">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control">
                                        <option>Open</option>
                                        <option>Done</option>
                                        <option>In Progress</option>
                                        <option>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="nim">NIM</label>
                                <div class="col-md-4">
                                    <input id="nim" name="nim" type="text" placeholder="" class="form-control">
                                </div>
                                <label class="col-md-1 control-label" for="tgl_surat">Tanggal</label>
                                <div class="col-md-4">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </div>
                                            <input placeholder="Masukan Tanggal Surat" type="text" class="form-control datepicker" name="tgl_surat">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="no_surat">Nomor Surat</label>
                                <div class="col-md-4">
                                    <input id="no_surat" name="no_surat" type="text" placeholder="" class="form-control">
                                </div>
                            <!-- 	<label class="col-md-1 control-label" for="nama">Name</label>
                                <div class="col-md-4">
                                    <input id="nama" name="nama" type="text" placeholder="" class="form-control">
                                </div> -->
                            </div>
                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-md pull-right btn-primary">
                                        <em class="fa fa-search"></em>
                                        Cari</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-md pull-left btn-danger">
                                        <em class="fa fa-recycle"></em>
                                        Reset</button>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!-- /.panel-->
        </div>
    </div><!--/.row-->
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Forms</div> -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead align="center">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Nomor Surat</th>
                                    <th>Tanggal Surat</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Status</th>
                                    <th>Proses</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Asep Sudarso</td>
                                    <td>11447799</td>
                                    <td>(not set)</td>
                                    <td>(not set)</td>
                                    <td>26 Desember 2019</td>
                                    <td><button type="button" class="btn btn-sm btn-primary">Open</button></td>
                                    <td><button type="button" class="btn btn-sm btn-primary"><em class="fa fa-arrow-circle-right"> </em> Proces</button></td>
                                    <td>
                                        <button type="submit" class="btn btn-sm btn-primary"><em class="fa fa-print"> </em></button>
                                        <button type="submit" class="btn btn-sm btn-success"><em class="fa fa-eye"> </em></button>
                                        <button type="submit" class="btn btn-sm btn-danger"><em class="fa fa-trash"> </em> </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
@endsection