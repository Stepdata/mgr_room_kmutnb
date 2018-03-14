<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="จัดการการใช้ห้องเรียน">
    <meta name="keyword" content="จัดการการใช้ห้องเรียน, room manage, Admin">

    <title>ระบบจัดการการใช้ห้องเรียน</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("assets"); ?>/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/ba567eae7a.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/css/main.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/js/gritter/css/jquery.gritter.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/lineicons/style.css">    
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/css/style-responsive.css"> 
    <!-- Boostrap table -->
    <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/bootstraptable/dist/bootstrap-table.css">
    <!-- Custom styles for this template -->
    <link href="<?= base_url("assets"); ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url("assets"); ?>/css/style-responsive.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" />
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
       
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!-- sidebar start -->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              	  <p class="centered"><a href="profile.html"><img src="<?= base_url("assets"); ?>/img/logo.jpg" class="img-circle" width="140" height="140"></a></p>
              	  <h5 class="centered"></h5>
              	  	
                  <li class="mt">
                      <a class="<?php if($_GET['page']=='home'){echo 'active'; }?>" href="?page=home">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                          <span>จัดการผู้ใช้</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="<?php if($_GET['page']=='status'){echo 'active';} ?>" href="?page=status" >
                            <i class="fa fa-desktop"></i>
                            <span>สถานะห้องเรียน</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php if($_GET['page']=='history'){echo 'active';} ?>" href="?page=history" >  
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                          <span>ประวัติการใช้งานห้อง</span>
                      </a>
                    
                  </li>
                  <li class="sub-menu">
                      <a class="" href="<?= site_url('dashboard/logout') ?>">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                          <span>ออกจากระบบ</span>
                      </a>
                  </li>
                 

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
              <?php 
                if($_GET["page"] != null){
                    switch($_GET["page"]) {
                        case "home":
                            include("home.php"); //หน้าแรก
                        break;
                        case "status":
                            include("status.php"); //หน้าแรก
                        break;
                        case "history":
                            include("history.php"); //หน้าแรก
                        break;
                        default:
                            include("home.php"); //หน้าแรก                       
                    }
                }else if($this->session->flashdata('status')){
                    redirect("dashboard/?page=status");
                }else if($this->session->flashdata('hist')){
                    redirect("dashboard/?page=history");
                }
                else{
                    redirect("dashboard/?page=home");
                }
                  ?>

              </div>
          </section>
      </section>
  </section>

<!-- js placed at the end of the document so the pages load faster -->
<!-- <script src="<?= base_url('assets'); ?>/js/jquery.js"></script> -->
<script src="<?= base_url('assets'); ?>/js/jquery-1.8.3.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="<?= base_url('assets'); ?>/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?= base_url('assets'); ?>/js/jquery.scrollTo.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- <script src="<?= base_url('assets'); ?>/js/jquery.sparkline.js"></script> -->
<!--common script for all pages-->
<script src="<?= base_url('assets'); ?>/js/common-scripts.js"></script>

<!--script for this page-->
<!-- <script src="<?= base_url('assets'); ?>/js/sparkline-chart.js"></script>     -->
<script src="<?= base_url('assets'); ?>/js/zabuto_calendar.js"></script>	

<!-- Alert2 -->
<script src="https://unpkg.com/sweetalert2@7.0.9/dist/sweetalert2.all.js"></script>
<!-- datepickter timepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/timepicker@1.11.12/jquery.timepicker.min.js"></script>
<!-- Bootstrap Table -->
<script src="<?php echo base_url('assets'); ?>/bootstraptable/dist/bootstrap-table.js"></script>
<script src="<?php echo base_url('assets'); ?>/bootstraptable/dist/extensions/editable/bootstrap-table-editable.js"></script>
<script src="<?php echo base_url('assets'); ?>/bootstraptable/dist/locale/bootstrap-table-th-TH.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/bootstraptable/bootstrap-table-select2-filter.js"></script>

<!-- data -->
<script src="<?php echo base_url('assets'); ?>/js/manage-user.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/history.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/status.js"></script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });
    
        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });
    
    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }

    $('input.date').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: true,
        language: "th",
        autoclose: true,
        todayHighlight: true
    });

    $('input.time').timepicker({
        'timeFormat': 'H:i:s'
    });
    // initialize input widgets first
    $('#child-hist .time-time').timepicker({
        'showDuration': true,
        'timeFormat': 'H:i:s'
    });

    $('#child-hist .date-time').datepicker({
        'format': 'yyyy-mm-dd',
        'autoclose': true,
        todayHighlight: true
    });
</script>
</body>
</html>
