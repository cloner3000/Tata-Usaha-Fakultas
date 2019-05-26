<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ asset('img/logo-uin.png') }}">
	<title>E-Service - Fakultas Dakwah & Komunikasi</title>
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker3.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<!-- <div class="logo"><a href="index.php" title=""><img src="img/logo_uin.png" alt="logo"></a></div> -->
				<a class="navbar-brand" href="/"><span>E-Service</span> FDK-UIN SGD</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li class="parent "><a data-toggle="collapse" href="#pen_surat">
				<em class="fa fa-envelope">&nbsp;</em> Pengajuan Surat <span data-toggle="collapse" href="#pen_surat" class="icon pull-right"><em class="fa fa-arrow-circle-down"></em></span>
				</a>
				<ul class="children collapse" id="pen_surat">
					<!-- <li><a href="form_surat.php"> -->
					<!-- <span class="fa fa-envelope-open">&nbsp;</span>Pengajuan Surat</a></li> -->
					<li><a href="form_sak.php">
					<span class="fa fa-envelope-open">&nbsp;</span>Aktif Kuliah</a></li>
                    <li><a href="form_skkb.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>SKKB</a></li>
                    <li><a href="form_spmk.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>SPMK</a></li>
                    <li><a href="form_observasi.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>Observasi</a></li>
                    <li><a href="form_skripsi.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>Bimbingan Skripsi</a></li>
                    <li><a href="form_penelitian.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>Izin Penelitian</a></li>
                    <li><a href="form_pkl.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>PKL</a></li>
                    <li><a href="form_skl.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>SKL</a></li>
                    <li><a href="form_legalisir.php">
                    <span class="fa fa-envelope-open">&nbsp;</span>Legalisir Ijazah</a></li>
                    <li><a href="form_ijazah.php">                  
                    <span class="fa fa-envelope-open">&nbsp;</span>Pengambilan Ijazah</a></li>
                    <li><a href="form_lainnya.php">                  
                    <span class="fa fa-envelope-open">&nbsp;</span>Lainnya</a></li>
				</ul>
			</li>
		</ul>
	</div><!--/.sidebar-->
    @yield('content')
    <div class="row">
			<div class="col-sm-12">
				<!-- <p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p> -->
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="{{ asset('/js/jquery-1.11.1.min.js') }}"></script>
	<script src="{{ asset('/js/bootstrap.min.css') }}"></script>
	<script src="{{ asset('/js/chart.min.js') }}"></script>
	<script src="{{ asset('/js/chart-data.js') }}"></script>
	<script src="{{ asset('/js/easypiechart.js') }}"></script>
	<script src="{{ asset('/js/easypiechart-data.js') }}"></script>
	<script src="{{ asset('/js/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('/js/custom.js') }}"></script>
	<script>
		window.onload = function () {
            var chart1 = document.getElementById("line-chart").getContext("2d");
            window.myLine = new Chart(chart1).Line(lineChartData, {
                responsive: true,
                scaleLineColor: "rgba(0,0,0,.2)",
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleFontColor: "#c5c7cc"
            });
        };
	</script>
	<script type="text/javascript">
        $(function(){
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
	</script>
		
</body>
</html>