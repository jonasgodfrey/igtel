<!DOCTYPE html>
<html>

<?php 


require('inc/config.php');
require('inc/db.php');
require('inc/core.php');

$admin_username = "";



if(!loggedin()){
  header('Location: index.php');
}else{
  $admin_username = getfield("operatorName");

}

?>

<?php

$myMessage = ""; 
$myId = "";

if(isset($_POST['submit'])){
  // $dayrep = mysqli_real_escape_string($conn, $_POST['dayrep']);
  // $consumer = mysqli_real_escape_string($conn, $_POST['consumer']);
  // $operator = mysqli_real_escape_string($conn, $_POST['operator']);
  // $complaint = mysqli_real_escape_string($conn, $_POST['complaint']);
  // $ctype = mysqli_real_escape_string($conn, $_POST['ctype']);
  // $area = mysqli_real_escape_string($conn, $_POST['area']);
  // $location = mysqli_real_escape_string($conn, $_POST['location']);
  $resolve = mysqli_real_escape_string($conn, $_POST['resolve']);
  $status = mysqli_real_escape_string($conn, $_POST['status']);
  $reportId = mysqli_real_escape_string($conn, $_POST['report_id']);


 
  $query = "INSERT INTO resolutionreports(`ConsumerReportID`,`Resolution`,`Status`,`DateResolved`)VALUES($reportId,'$resolve','$status',now())";

  if($query_run = mysqli_query($conn, $query)){

 


    if($my_query = mysqli_query($conn, "UPDATE consumersreports set Status = 2 WHERE ConsumersReportID = ". $reportId)){


      $message = "Submitted Successfully";
 
       echo "<script type='text/javascript'>alert('$message');</script>";
 
     }
}else{
 echo 'ERROR: '.mysqli_error($conn);
}

}  

?>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2019 16:24:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iGoTel | Resolutions</title>
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
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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
          <p><?php echo $admin_username; ?></p>
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
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            
          </a>          
        </li>
     
        <li class="active">
          <a href="resolutions.php">
            <i class="fa fa-th"></i> <span>Consumers Complaiints</span>
            </a>
        </li>


      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Consumers Incidents Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-file"></i> Dashboard</a></li>
        <li class="active">Incidents</li>
      </ol>
    </section>
<section class="content">
      
      <div class="row">
        <div class="col-lg-12 col-xs-12">       
            <div class="box">
            <div class="box-header">
                <div class="box-body">
                       
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                
                                <th>Date Submitted</th>
                                <th>Consumer</th>
                                <th>Operator</th>
                                <th>Complaint Type</th>
                                <th>Complaint</th>
                                <th>Observed Signal</th>
                                <th>Rating</th>
                                <th>Frequency</th>
                                <th>Area</th>
                                <th>State</th>
                                <th>Longitude</th>
                                <th>Latitude</th>
                                <th>Action</th>
                                 
                                                                                           
                             </tr>
                           </thead>
                           <tbody>

                            <?php
                         
                            $sql = "SELECT ConsumersReportID,DateSubmitted,ConsumerID,OperatorID,ServiceTypeID,ClassofServiceID,RatingID,IMEI,Area,StateID,Description,
                            Latitude,Longitude,FrequencyofOccurenceID,Status FROM consumersreports";
                            $result = $conn->query($sql);
                            $counter = 1;

                            if($result->num_rows > 0){

                              
                              while ($row = $result-> fetch_assoc()){

                               

                             
  
                              

                                $OperatorID=$row['OperatorID'];
                                $sql1="SELECT OperatorName FROM operator WHERE OperatorID = ". $_SESSION['operator_id'];
                                         $result1 = mysqli_query($conn, $sql1);
                                $row_main1 = mysqli_fetch_array($result1);

                                $ConsumerID=$row['ConsumerID'];
                                $sql2="SELECT MobileNumber FROM consumers WHERE ConsumerID='$ConsumerID'";
                                         $result2 = mysqli_query($conn, $sql2);
                                $row_main2 = mysqli_fetch_array($result2);

                                $ServiceTypeID=$row['ServiceTypeID'];
                                $sql3="SELECT ServiceTypeName FROM servicetype WHERE ServiceTypeID='$ServiceTypeID'";
                                         $result3 = mysqli_query($conn, $sql3);
                                $row_main3 = mysqli_fetch_array($result3);

                                $StateID=$row['StateID'];
                                $sql4="SELECT StateName FROM state WHERE StateID='$StateID'";
                                         $result4 = mysqli_query($conn, $sql4);
                                $row_main4 = mysqli_fetch_array($result4);

                                $ClassofServiceID=$row['ClassofServiceID'];
                                $sql5="SELECT ClassofServiceName FROM classofservice WHERE ClassofServiceID='$ClassofServiceID'";
                                         $result5 = mysqli_query($conn, $sql5);
                                $row_main5 = mysqli_fetch_array($result5);

                                $RatingID=$row['RatingID'];
                                $sql6="SELECT Rating FROM rating WHERE RatingID='$RatingID'";
                                         $result6 = mysqli_query($conn, $sql6);
                                $row_main6 = mysqli_fetch_array($result6);

                                $FrequencyofOccurenceID=$row['FrequencyofOccurenceID'];
                                $sql7="SELECT Frequency FROM frequencyofoccurence WHERE FrequencyofOccurenceID='$FrequencyofOccurenceID'";
                                         $result7 = mysqli_query($conn, $sql7);
                                $row_main7 = mysqli_fetch_array($result7);

                                $row['operator'] = $row_main1;
                                $row['service'] = $row_main3;
                                $row['state'] = $row_main4;

                                $myId = $row['ConsumersReportID'];
                                
                                if ($row["Status"] == 2) {
                                  $status = "<button type=\"button\" class=\"btn btn-success btn-sm\">Resolved</button>";
                                }else{
$status ="<a href='javascript:;' onClick='pickRow(" . json_encode($row) . ", " . json_encode($row_main2) . "," . json_encode($row_main3) . ",". json_encode($row_main4) .",".$myId.")' data-toggle='modal' data-target='#exampleModal' class='btn btn-danger btn-sm'>Resolve</a>";
                                }
                                
                               
                                echo "<tr>

                                <td>".$row["DateSubmitted"].$myId."</td>
                                <td>".$row_main2['MobileNumber']."</td>                                
                                <td>".$row_main1['OperatorName']."</td>
                                <td>".$row_main3['ServiceTypeName']."</td>                                
                                <td>".$row['Description']."</td>
                                <td>".$row_main5['ClassofServiceName']."</td>
                                <td>".$row_main6['Rating']."</td>
                                <td>".$row_main7['Frequency']."</td>
                                <td>".$row['Area']."</td>
                                <td>".$row_main4['StateName']."</td> 
                                <td>".$row['Longitude']."</td> 
                                <td>".$row['Latitude']."</td>   
                                <td>".$status."</td>                                                                                       

                                </tr>";
                                $counter++;

                              }

                            }
                            else{
                              echo "0 result";
                            }
                            ?>


                          </tbody>
                        </table>

                    </div>
                  </div>
                </div>
            </div>
        </div>
              </section>            

           

    <!-- Main content -->
    <section class="content">

    
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

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
    <strong>Copyright &copy; 2019 Powered by <?php echo $myMessage; ?><a href="https://adminlte.io/">GUUT TECHNOLOGIES LTD</a>.</strong> All rights
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Resolution Report</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                            
          <div class="display"></div>
          <form role="form" action="resolutions.php" method="POST">
              <div class="box-body">
              <div class="form-group">
                  <label for="">Date Reported</label>
                  <input type="text" name="dayrep" class="form-control" id="DateSubmitted" value="" readonly>
                </div>
                <div class="form-group">
                  <label for="">Consumer</label>
                  <input type="text" name="consumer" class="form-control" id="mobileNumber" readonly>
                </div>
                <div class="form-group">
                  <label for="">Operator</label>
                  <input type="text" name="operator" class="form-control" id="operator" readonly>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Complaint</label>
                  <textarea type="text" name="complaint" class="form-control" id="description" readonly></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Complaint Type</label>
                  <input type="text" name="ctype" class="form-control" id="service" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Area</label>
                <input type="text" name="area" class="form-control" id="area" readonly>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">State</label>
                <input type="text" name="location" class="form-control" id="state" readonly>
                 <input type="hidden" name="report_id" class="form-control" id="report_id" readonly>
                </div>

                <div class="form-group">
                  <label for="">Resolution</label>
                <textarea name="resolve" class="form-control" id="" placeholder="Resolution Notes"></textarea>
                </div>             
                
              
                <div class="form-group">
                  <label for="">Status</label>
                  <select name="status" class="form-control">
                  <option></option>
                  <option value="2">Resolved</option>
                  <option value="1">Pending</option>
                </select>
                </div>

               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
              </div>
            </form>
      </div>

    </div>
  </div>
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
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
$(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-46680343-1');
})
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-46680343-1');

  function pickRow(value, value2, value3, value4, value5){

    $('#mobileNumber').val(value2.MobileNumber)
    $('#operator').val(value.operator.OperatorName)
    $('#description').val(value.Description)
    $('#DateSubmitted').val(value.DateSubmitted)
    $('#service').val(value3.ServiceTypeName)
    $('#state').val(value4.StateName)
    $('#area').val(value.Area)
    $('#report_id').val(value5)
    
  }
</script>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2019 16:24:51 GMT -->
</html>
