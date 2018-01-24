<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="จัดการผู้ใช้">
    <meta name="keyword" content="จัดการผู้ใช้, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - FREE Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("assets"); ?>/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" href="https://use.fontawesome.com/ba567eae7a.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?= base_url("assets"); ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url("assets"); ?>/css/style-responsive.css" rel="stylesheet">

    <script src="<?= base_url("assets"); ?>/js/chart-master/Chart.js"></script>
    
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
              	  <p class="centered"><a href="profile.html"><img src="assets/img/logo.jpg" class="img-circle" width="140" height="140"></a></p>
              	  <h5 class="centered"></h5>
              	  	
                  <li class="mt">
                      <a class="<?php if($_GET['page']=='home'){echo 'active';}?>" href="?page=home">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                          <span>จัดการผู้ใช้</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="<?php if($_GET['page']=='etc'){echo 'active';} ?>" href="?page=etc" >
                            <i class="fa fa-desktop"></i>
                            <span>สถานะห้องเรียน</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php if($_GET['page']=='plug'){echo 'active';} ?>" href="?page=plug" >  
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                          <span>ประวัติการใช้งานห้อง</span>
                      </a>
                    
                  </li>
                  <li class="sub-menu">
                      <a class="" href="index.php">
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
                    switch($_GET["page"]) {
                        case "home":
                            include("home.php"); //หน้าแรก
                        break;
                        case "etc":
                            include("etc.php"); //หน้าแรก
                        break;
                        case "plug":
                            include("plug.php"); //หน้าแรก
                        break;
                        default:
                            include("home.php"); //หน้าแรก                       
                    }
                  ?>

              </div> <! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <!-- <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer> -->
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets'); ?>/js/jquery.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery-1.8.3.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url('assets'); ?>/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url('assets'); ?>/js/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="<?= base_url('assets'); ?>/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?= base_url('assets'); ?>/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?= base_url('assets'); ?>/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?= base_url('assets'); ?>/js/sparkline-chart.js"></script>    
	<script src="<?= base_url('assets'); ?>/js/zabuto_calendar.js"></script>	
	
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
    </script>
  

  </body>
</html>
