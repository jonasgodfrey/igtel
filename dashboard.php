<?php
  require('inc/config.php');
  require('inc/db.php');
?>

<?php

  $qry = "SELECT * FROM consumersreports";
  

  $counter = mysqli_num_rows(mysqli_query($conn, $qry));

  $qry2 = "SELECT * FROM consumers";
  $counter2 = mysqli_num_rows(mysqli_query($conn, $qry2));

  $qry3 = "SELECT * FROM operator";
  $counter3 = mysqli_num_rows(mysqli_query($conn, $qry3));

  $qry4 = "SELECT * FROM otherreports WHERE MediaID = 'USSD Code (662)'";
  $counter4 = mysqli_num_rows(mysqli_query($conn, $qry4));

  $qry5 = "SELECT * FROM otherreports WHERE MediaID = 'Social Media'";
  $counter5 = mysqli_num_rows(mysqli_query($conn, $qry5));

  $qry6 = "SELECT * FROM otherreports WHERE MediaID = 'Email'";
  $counter6 = mysqli_num_rows(mysqli_query($conn, $qry6));

  $qry7 = "SELECT * FROM otherreports WHERE MediaID = 'Direct Contacts'";
  $counter7 = mysqli_num_rows(mysqli_query($conn, $qry7));

  $qry8 = "SELECT * FROM consumersreports WHERE Status = 2 ";
  $counter8 = mysqli_num_rows(mysqli_query($conn, $qry8));

  $qry9 = "SELECT * FROM otherreports WHERE MediaID = 'CTHM'";
  $counter9 = mysqli_num_rows(mysqli_query($conn, $qry9));

  $qry10 = "SELECT * FROM otherreports WHERE MediaID = 'COP'";
  $counter10 = mysqli_num_rows(mysqli_query($conn, $qry10));

  $qry11 = "SELECT * FROM otherreports WHERE MediaID = 'TCP'";
  $counter11 = mysqli_num_rows(mysqli_query($conn, $qry11));

  $qry12 = "SELECT * FROM consumersreports WHERE Status = 2 ";
  $counter12 = mysqli_num_rows(mysqli_query($conn, $qry12));


?>
<!DOCTYPE html>
<html>
<!-- This is actually my first commit test on git hub -->
<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2019 16:24:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iGoTel | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>i</b>GTel</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>i</b>GoTel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
         
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
                  <!-- end task item -->
                 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/logo.png" class="user-image" alt="User Image">
              <span class="hidden-xs">iGoTel</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/logo.png" class="img-circle" alt="User Image">

                <p>
                  iGoTel - Admin
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
            
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-centre">
                  <a href="index.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>iGoTel-Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>            
          </a>          
        </li>
        <li>
          <a href="incidents.php">
            <i class="fa fa-files-o"></i>
            <span>Consumers Complaints</span>          
          </a>         
        </li>
        <li>
          <a href="resolutions.php">
            <i class="fa fa-th"></i> <span>Operators Resolutions</span>
            </a>
        </li>
        
        <li><a href="registeredusers.php"><i class="fa fa-users"></i> <span>Users</span></a></li>

        <li class="treeview">
        <a href="emptypage.php">
        <i class="fa fa-file"></i>       
        <span>Outreach Reports</span>
        <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
        </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="emptypage.php"><i class="fa fa-file"></i>CTH</a></li>
            <li><a href="emptypage.php"><i class="fa fa-file"></i>COP</a></li>
            <li><a href="emptypage.php"><i class="fa fa-file"></i>TCD</a></li>

          </ul>
        </li>

        <li><a href="#"  data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-user"></i><span>Add</span><span class="pull-right-container">
              <small class="label pull-right bg-purple">New Operator</small>
            </span></a></li>


      </ul>
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $counter ?></h3>

              <p>Incidents Reports</p>
            </div>
            <div class="icon">
              <i class="ion ion-filing"></i>
            </div>
            <a href="incidents.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $counter8 ?></h3>

              <p>Incidents Resolved </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="incidents.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
              <h3><?php echo $counter3 ?></h3>

              <p>Licensed Operators</p>
            </div>
            <div class="icon">
              <i class="ion ion-wifi"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $counter2 ?></h3>

              <p>Registered Consumers</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="registeredusers.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $counter9 ?></h3>

              <p>Incidents From CTHM</p>
            </div>
            <div class="icon">
              <i class="ion ion-filing"></i>
            </div>
            <a href="emptypage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $counter10 ?></h3>

              <p>Incidents From COP</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="emptypage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $counter11 ?></h3>

              <p>Incidents From TCP</p>
            </div>
            <div class="icon">
              <i class="ion ion-wifi"></i>
            </div>
            <a href="emptypage.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-black">
            <div class="inner">
              <h3><?php echo $counter12 ?></h3>

              <p>Incidents Resolved</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people-outline"></i>
            </div>
            <a href="registeredusers.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
  
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-mobile"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">USSD CODE (662)</span>
        <span class="info-box-number"><?php echo $counter4 ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-green"><i class="fa fa-globe"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Social Media</span>
        <span class="info-box-number"><?php echo $counter5 ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-yellow"><i class="fa fa-envelope-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Email</span>
        <span class="info-box-number"><?php echo $counter6?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-red"><i class="ion ion-ios-people-outline"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Direct Walk-in Consumers</span>
        <span class="info-box-number"><?php echo $counter7 ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  
  </div>
 

      <div class="row">
        <div class="col-md-6">
                  <!-- DONUT CHART -->
                  <div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">Reporting Media</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>             
            </div>
            <div class="box-body">
              <canvas id="pieChart" style="height: 272px; width: 545px;" width="545" height="272"></canvas>
            </div>
          </div>
    

        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
        <!-- BAR CHART -->
        <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Consumers Rating</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="barChart" style="height: 365px; width: 545px;" width="545" height="365"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        
          </div>
          <!-- /.box -->

          

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      

          <!-- End of charts -->

        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
  </div>
  
  </section>
  <!-- /.content-wrapper -->

  
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Proudly</b> Nigeria
    </div>
    <strong>Copyright &copy; 2019 Powered by <a href="https://adminlte.io/">GUUT TECHNOLOGIES LTD</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark" style="display: none;">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/chart.js/Chart.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="ad.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46680343-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-46680343-1');
</script>
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // // Get context with jQuery - using jQuery's .get() method.
    // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    // // This will get the first returned node in the jQuery collection.
    // var areaChart       = new Chart(areaChartCanvas)

    // var areaChartData = {
    //   labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    //   datasets: [
    //     {
    //       label               : 'Electronics',
    //       fillColor           : 'rgba(210, 214, 222, 1)',
    //       strokeColor         : 'rgba(210, 214, 222, 1)',
    //       pointColor          : 'rgba(210, 214, 222, 1)',
    //       pointStrokeColor    : '#c1c7d1',
    //       pointHighlightFill  : '#fff',
    //       pointHighlightStroke: 'rgba(220,220,220,1)',
    //       data                : [65, 59, 80, 81, 56, 55, 40]
    //     },
    //     {
    //       label               : 'Digital Goods',
    //       fillColor           : 'rgba(60,141,188,0.9)',
    //       strokeColor         : 'rgba(60,141,188,0.8)',
    //       pointColor          : '#3b8bba',
    //       pointStrokeColor    : 'rgba(60,141,188,1)',
    //       pointHighlightFill  : '#fff',
    //       pointHighlightStroke: 'rgba(60,141,188,1)',
    //       data                : [28, 48, 40, 19, 86, 27, 90]
    //     }
    //   ]
    // }

    // var areaChartOptions = {
    //   //Boolean - If we should show the scale at all
    //   showScale               : true,
    //   //Boolean - Whether grid lines are shown across the chart
    //   scaleShowGridLines      : false,
    //   //String - Colour of the grid lines
    //   scaleGridLineColor      : 'rgba(0,0,0,.05)',
    //   //Number - Width of the grid lines
    //   scaleGridLineWidth      : 1,
    //   //Boolean - Whether to show horizontal lines (except X axis)
    //   scaleShowHorizontalLines: true,
    //   //Boolean - Whether to show vertical lines (except Y axis)
    //   scaleShowVerticalLines  : true,
    //   //Boolean - Whether the line is curved between points
    //   bezierCurve             : true,
    //   //Number - Tension of the bezier curve between points
    //   bezierCurveTension      : 0.3,
    //   //Boolean - Whether to show a dot for each point
    //   pointDot                : false,
    //   //Number - Radius of each point dot in pixels
    //   pointDotRadius          : 4,
    //   //Number - Pixel width of point dot stroke
    //   pointDotStrokeWidth     : 1,
    //   //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    //   pointHitDetectionRadius : 20,
    //   //Boolean - Whether to show a stroke for datasets
    //   datasetStroke           : true,
    //   //Number - Pixel width of dataset stroke
    //   datasetStrokeWidth      : 2,
    //   //Boolean - Whether to fill the dataset with a color
    //   datasetFill             : true,
    //   //String - A legend template
    //   legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].lineColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
    //   //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
    //   maintainAspectRatio     : true,
    //   //Boolean - whether to make the chart responsive to window resizing
    //   responsive              : true
    // }

    //Create the line chart
    // areaChart.Line(areaChartData, areaChartOptions)

    // //-------------
    // //- LINE CHART -
    // //--------------
    // var lineChartCanvas          = $('#lineChart').get(0).getContext('2d')
    // var lineChart                = new Chart(lineChartCanvas)
    // var lineChartOptions         = areaChartOptions
    // lineChartOptions.datasetFill = false
    // lineChart.Line(areaChartData, lineChartOptions)

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : parseInt("<?php echo $counter4; ?>"),
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'USSD CODE'
      },
      {
        value    :  parseInt("<?php echo $counter5; ?>"),
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Social Media'
      },
      {
        value    :  parseInt("<?php echo $counter6; ?>"),
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Email'
      },
      {
        value    :  parseInt("<?php echo $counter7; ?>"),
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Direct contact'
      }
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

    //-------------
    //- BAR CHART -
    //-------------

    

    var areaChartData2 = {
      labels  : ['MTN', 'GLO', 'AIRTEL', '9MOBILE', 'NTEL', 'SPECTRANET'],
      datasets: [
        {
          label               : 'Electronics',
          fillColor           : '#f39c12', 
          strokeColor         : 'rgba(210, 214, 222, 1)',
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
       
      ]
    }
    var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
    var barChart                         = new Chart(barChartCanvas)
    var barChartData                     = areaChartData2
   
    var barChartOptions                  = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero        : true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines      : true,
      //String - Colour of the grid lines
      scaleGridLineColor      : 'rgba(0,0,0,.05)',
      //Number - Width of the grid lines
      scaleGridLineWidth      : 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines  : true,
      //Boolean - If there is a stroke on each bar
      barShowStroke           : true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth          : 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing         : 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing       : 1,
      //String - A legend template
      legendTemplate          : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
      //Boolean - whether to make the chart responsive
      responsive              : true,
      maintainAspectRatio     : true
    }

    barChartOptions.datasetFill = false

    $.ajax({
      url: 'chart.php',
      success: (res) => {
        areaChartData2['datasets'][0]['data'] = JSON.parse(res);
        barChart.Bar(barChartData, barChartOptions)
      }
    })
    
  })
</script>


    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="display"></div>
          <form role="form" action="dashboard.php" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Operator</label>
                  <input type="text" name="opera" class="form-control" id="" required>
                </div>
                <div class="box-footer">
             
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary" style="text-align:left">Add Operator</button>
        </div>
            </form>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_POST['submit'])){
  $opera = mysqli_real_escape_string($conn, $_POST['opera']);
 
  $query = "INSERT INTO operator(`OperatorName`)
  VALUES('$opera')";

  if($query_run = mysqli_query($conn, $query)){

     $message = "Operator Added Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";

}else{
 echo 'ERROR: '.mysqli_error($conn);
}

}   

?>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2019 16:24:51 GMT -->
</html>
