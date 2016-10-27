@extends('admin.layout.default')

@section('content')
<!-- BEGIN PAGE HEADER-->
<div class="row">
    <div class="col-md-12">
    <!-- BEGIN PAGE TITLE & BREADCRUMB-->   
    <h3 class="page-title">
      Dashboard
    </h3>
    
    <br />
    <h4>Total Transaksi: {{ isset($total)? $total : 0}}</h4>
    <!-- END PAGE TITLE & BREADCRUMB--> 
    </div>
</div>
<!-- END PAGE HEADER-->
@stop

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    
    <!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Conquer | Admin Dashboard Template</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-conquer.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
    
    <!-- BEGIN HEADER -->   
<div class="header navbar navbar-inverse navbar-fixed-top">
  <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="header-inner">
    <!-- BEGIN LOGO -->  
        <a class="navbar-brand" href="index.html">
            &nbsp;&nbsp;Dashboard Admin
        </a>
    <!-- END LOGO -->
      
    <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
        <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <img src="assets/img/menu-toggler.png" alt="" />
        </a> 
    <!-- END RESPONSIVE MENU TOGGLER -->
      
        <ul class="nav navbar-nav pull-right">
            <li><a href="/login.html"><i class="fa fa-sign-out"></i> Logout</a></li>
        </ul>
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<br /><br />
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar navbar-collapse collapse">
    <br />
  <!-- BEGIN SIDEBAR MENU -->        
  <ul class="page-sidebar-menu">
    <li class="">
      <a href="dashboard.html">
      <i class="fa fa-home"></i> 
      <span class="title">Dashboard</span>
      <span class="selected"></span>
      </a>
    </li>
      
    <li class="start active">
      <a href="transaksi.html">
      <i class="fa fa-plus"></i> 
      <span class="title">Transaksi Keseluruhan</span>
      <span class="selected"></span>
      </a>
    </li>
      
    <li class="">
      <a href="fasilitas.html">
      <i class="fa fa-gears"></i> 
      <span class="title">Kaki Bawah</span>
      <span class="selected"></span>
      </a>
    </li>
      
    <li class="">
      <a href="kartu.html">
      <i class="fa fa-credit-card"></i> 
      <span class="title">Kartu</span>
      <span class="selected"></span>
      </a>
    </li>
    
    <li class="">
      <a href="kasir.html">
      <i class="fa fa-money"></i> 
      <span class="title">Kasir</span>
      <span class="selected"></span>
      </a>
    </li>
    
    <li class="">
      <a href="setoran.html">
      <i class="fa fa-gavel"></i> 
      <span class="title">Setoran</span>
      <span class="selected"></span>
      </a>
    </li>
      
  </ul>
  <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->

<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <div class="row">
      <div class="col-md-12">
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->   
        <h3 class="page-title">
          Transaksi Keseluruhan
        </h3>
        
        <br />
        <button type="button" class="btn btn-success"><i class="fa fa-download"></i> Export</button>
        <button type="button" class="btn btn-success"><i class="fa fa-print"></i> Print</button>
          
          
        <br /><br /><br /><br />
          
        <!-- BEGIN PAGE CONTENT-->
			<div class="row">
                <div class="col-md-8 pull-right">
                    <div class="col-md-2">
                        <h5 style="margin-top:0.5em;"><strong>Periode</strong></h5>
                    </div>
                    <div class="col-md-1">
                        <p style="margin-top:0.3em;">From:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-sm">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                            <input type="date" class="form-control form-filter">
                        </div>
                    </div>
                     <div class="col-md-1">
                        <p style="margin-top:0.3em;">To:</p>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group input-group-sm">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                            </span>
                            <input type="date" class="form-control form-filter">
                        </div>
                    </div>
                </div>
                <br /><br /><br />
				<div class="col-md-12">
					<div class="portlet">
						<div class="portlet-body">
							<div class="table-container">
								<table class="table table-striped table-bordered table-hover" id="datatable_ajax">
								<thead>
								<tr role="row" class="heading">
									<th width="5%" class="text-center">
										 #
									</th>
									<th class="text-center">
										 Nama
									</th>
									<th class="text-center">
										 Role
									</th>
									<th class="text-center">
										 Total Pendapatan
									</th>
								</tr>
								</thead>
								<tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td class="text-center">Anton</td>
                                        <td class="text-center">Kepala</td>
                                        <td class="text-center">Rp 100,000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td class="text-center">Anton</td>
                                        <td class="text-center">Kaki Bawah</td>
                                        <td class="text-center">Rp 100,000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td class="text-center">Anton</td>
                                        <td class="text-center">Kaki Bawah</td>
                                        <td class="text-center">Rp 100,000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td class="text-center">Anton</td>
                                        <td class="text-center">Kaki Bawah</td>
                                        <td class="text-center">Rp 100,000</td>
                                    </tr>
								</tbody>
                                
                                <tr>
                                    <td colspan="3" class="text-center"><strong>Tanggal Transaksi:</strong> dd/mm/yyy</td>    
                                    <td colspan="1" class="text-center"><strong>Total Pendapatan:</strong> Rp 400,000</td>    
                                </tr>
								</table>
							</div>
						</div>
					</div>
					<!-- End: life time stats -->
				</div>
			</div>
			<!-- END PAGE CONTENT-->

          
        <!-- END PAGE TITLE & BREADCRUMB--> 
      </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- CONTENT BODY GOES HERE >>>> -->
</div>      
<!-- END PAGE -->

<!-- BEGIN FOOTER -->
<div class="footer">
   <div class="footer-inner">
      2013 &copy; Conquer by keenthemes.
   </div>
   <div class="footer-tools">
      <span class="go-top">
      <i class="icon-angle-up"></i>
      </span>
   </div>
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->   
<script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>  
<script src="assets/plugins/jquery.peity.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-knob/js/jquery.knob.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
<script src="assets/plugins/gritter/js/jquery.gritter.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js" type="text/javascript"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>  
<script src="assets/scripts/tasks.js" type="text/javascript"></script>  
<!-- END PAGE LEVEL SCRIPTS -->  
<script>
  jQuery(document).ready(function() {    
     App.init(); // initlayout and core plugins
     Index.init();
     Index.initJQVMAP(); // init index page's custom scripts
     Index.initCalendar(); // init index page's custom scripts
     Index.initCharts(); // init index page's custom scripts
     Index.initChat();
     Index.initMiniCharts();
     Index.initPeityElements();
     Index.initKnowElements();
     Index.initDashboardDaterange();
     Tasks.initDashboardWidget();
  });
</script>
<!-- END JAVASCRIPTS -->