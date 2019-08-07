<?php
  require('inc/config.php');
  require('inc/db.php');
?>

<?php
if(isset($_POST['submit'])){
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
  $service = mysqli_real_escape_string($conn, $_POST['service']);
  $operator = mysqli_real_escape_string($conn, $_POST['operator']);
  $location = mysqli_real_escape_string($conn, $_POST['location']);
  $channel = mysqli_real_escape_string($conn, $_POST['channel']);
  $complaint = mysqli_real_escape_string($conn, $_POST['complaint']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $question1 = mysqli_real_escape_string($conn, $_POST['question1']);
  $question2 = mysqli_real_escape_string($conn, $_POST['question2']);
  $dof = mysqli_real_escape_string($conn, $_POST['dof']);
  $status = 1;
 
  $query = "INSERT INTO otherreports(`Name`, `Operator`, `MobileNumber`, `ServiceType`, `Location`, `MediaID`, `Complaint`, `Email`, `question1`, `question2`, `FirstComplaint`,`DateReported`,`Status`)
  VALUES('$fname','$operator','$mobile','$service','$location','$channel','$complaint','$email','$question1','$question2','$dof',now(),$status)";

  if($query_run = mysqli_query($conn, $query)){

     $message2 = "Report Submitted Successfully";
echo "<script type='text/javascript'>alert('$message2');</script>";

}else{
 echo 'ERROR: '.mysqli_error($conn);
}

}   

?>
<!DOCTYPE html>
<html>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jun 2019 16:24:51 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iGoTel | Reports</title>
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
      <form  class="sidebar-form">
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
        Outreach Incidents Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-file"></i> Dashboard</a></li>
        <li class="active">Incidents</li>
      </ol>
    </section>

    

    <!-- Main content -->
    <section class="content">

      <div class="row">
      <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Data Entry Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="emptypage.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                <div class="col-sm-4">
                  <label for="">Name</label>
                  <input type="text" name="fname" class="form-control" id="" placeholder="Consumer's Name" required>
                </div>
            
                <div class="col-sm-4">
                  <label for="">Mobile Number</label>
                  <input type="text" name="mobile" class="form-control" id="" placeholder="Mobile Number" required>
                </div>
                
                <div class="col-sm-4">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control is-valid" id="" placeholder="consumers email" required>
                </div>
                </div>

                <div class="form-group">
                <div class="col-sm-4">
                  <label for="exampleInputPassword1">Type of Complaint</label>
                  <select type="text" name="service" class="form-control" id="" placeholder="complaint Type" required>
                  <option>..Select..</option>  
                  <option>Billing</option>
                    <option>Call Centre / Customer Care</option>
                    <option>Call Set Up</option>
                    <option>Faulty Terminal</option>
                    <option>Health Issues</option>
                    <option>Internet Services</option>
                    <option>Promotion</option>
                    <option>Recharge Card</option>
                    <option>SMS Issues</option>
                    <option>SIM Issues</option>
                    <option>Value Added Services</option>
                    <option>3G Services</option>
                    <option>Poor Network / Network Coverage</option>
                    <option>Porting</option>
                  </select>
                </div>
                         
                <div class="col-sm-4">
                  <label for="">Service Provider with Issue</label>
                  <select type="text" name="operator" class="form-control" id="" placeholder="Service Operator" required>
                  <option>..Select..</option>
                    <option>GLO</option>
                    <option>AIRTEL</option>
                    <option>9MOBILE</option>
                    <option>MTN</option>
                    <option>NTEL</option>
                    <option>SPECTRANET</option>
                    <option>VODACOM</option>
                  </select>
                </div>
                <div class="col-sm-4">
                  <label for="exampleInputPassword1">Have you Contacted Your Service Provider?</label>
                  <select type="text" name="question1" class="form-control" id="" placeholder="" required>
                  <option>..Select..</option>  
                  <option>Yes</option>
                    <option>No</option>                    
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-4">
                  <label for="exampleInputPassword1">Are You Satisfied?</label>
                  <select type="text" name="question2" class="form-control" id="" placeholder="" required>
                  <option>..Select..</option>  
                  <option>Yes</option>
                    <option>No</option>                    
                  </select>
                </div> 
                <div class="col-sm-4">
                  <label for="">Date of First Complaint to Service Provider</label>
                  <input type="date" name="dof" class="form-control" id="" placeholder="" required>
                </div>  
                <div class="col-sm-4">
                  <label for="">Location</label>
                  <input type="text" name="location" class="form-control" id="" placeholder="Consumer Location" required>
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-4">
                  <label for="">Reporting Media</label>
                  <select type="text" name="channel" class="form-control" id="" placeholder="Reporting Channel Used" required>
                  <option>..Select..</option>
                    <option>USSD Code (662)</option>
                    <option>Social Media</option>
                    <option>Email</option>
                    <option>Direct Contacts</option>
                    <option value="CTHM">Consumer Town Hall Meeting</option>
                    <option value="COP">Consumer Outreach Programme</option>
                    <option value="TCP">Telecom Consumer Parliament</option>
                  </select>
                </div>
                <div class="col-sm-8">
                  <label for="">Complaint Description</label>
                  <textarea name="complaint" class="form-control" id="" placeholder="Description" required></textarea>
                </div>

               </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

         
  </div>


        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
      
<section class="content">
<h2>
        Outreach Incidents Reports
      </h2>
      
      <div class="row">
        <div class="col-lg-12 col-xs-12">       
            <div class="box">
            <div class="box-header">
                <div class="box-body">
                       
                <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                
                                <th>Date of First Complaint</th>
                                <th>Consumer</th>
                                <th>Service Type</th>
                                <th>Location</th>
                                <th>Complaint Channel</th>
                                <th>Complaint Description</th>
                                <th>Service Provider</th>
                                <th>Resolution Status</th>                              
                                 
                                                                                           
                             </tr>
                           </thead>
                           <tbody>

                            <?php
                          
                            $sql = "SELECT `ReportingID`, `Name`, `Operator`, `MobileNumber`, `ServiceType`, `Location`, `MediaID`, `Complaint`, `Email`, `question1`, `question2`, `FirstComplaint`,`Status` FROM `otherreports` ORDER BY DateReported DESC";
                             $result = $conn->query($sql);
                           

                            if($result->num_rows > 0){
                              while ($row = $result-> fetch_assoc()){

                                if ($row["MediaID"] == 'CTHM') {
                                  $media = "Consumers Town Hall Meetings";
                                }
                                else if($row["MediaID"] == 'COP') {
                                  $media = "Consumers Outreach Program";
                                }
                                else if($row["MediaID"] == 'TCP') {        
                                  $media = "Telecom Outreach Program";                         
                                }
                                else {
                                  $media = $row["MediaID"];
                                }

                                if ($row["Status"] == 1) {
                                  $resolution = "Pending";
                                }else if($row["Status"] == 2){
                                  $resolution = "Resolved";
                                }
                                else{
                                  $resolution = "No Status Yet";
                                }

                                echo "<tr>

                                <td>".$row["FirstComplaint"]."</td>
                                <td>".$row['MobileNumber']."</td>                                
                                <td>".$row["ServiceType"]."</td>
                                <td>".$row['Location']."</td>
                                <td>".$media."</td> 
                                <td>".$row['Complaint']."</td> 
                                <td>".$row['Operator']."</td>    
                                <td>".$resolution."</td>                            
                                
                                </tr>";
                            

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
        <button type="submit" name="add" class="btn btn-primary" style="text-align:left">Add Operator</button>
        </div>
            </form>
      </div>
    </div>
  </div>
</div>

<?php
if(isset($_POST['add'])){
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
