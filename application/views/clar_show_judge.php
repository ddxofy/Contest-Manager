<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Clarification Answering</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <!--external css-->
    <link href=" <?php echo base_url('assets/font-awesome/css/font-awesome.css') ?> " rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/zabuto_calendar.css') ?>  ">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/gritter/css/jquery.gritter.css') ?>  " />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/lineicons/style.css') ?>  ">    
    
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css') ?>" rel="stylesheet">
    
    <script src="<?php echo base_url('assets/js/chart-master/Chart.js') ?>"></script>
    
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
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?php echo site_url('contestlist');?>" class="logo"><b>Contest Manager</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo site_url('signin/signout');?>">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="<?php echo site_url('dashboard/index/'.$contest_id.'/');?>"><img src="<?php echo base_url('assets/img/ui-sam.jpg') ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?=$contest_name?></h5>
              	  	
                  <li class="mt">
                      <a href="<?php echo site_url('dashboard/index/'.$contest_id.'/');?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                <li class="sub-menu">
                      <a href="<?php echo site_url('standings/index/'.$contest_id.'/');?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Standings</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo site_url('submission/index/'.$contest_id.'/');?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Submissions</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a class="active" href="<?php echo site_url('clarification/index/'.$contest_id.'/');?>" >
                          <i class="fa fa-dashboard"></i>
                          <span>Clarifications</span>
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
              <div class="row mt">
                  <div class="col-md-12">
					  <h3><i class="fa fa-angle-right"></i> Question</h3>
					  <?=$clarification->question?>
					  <h3><i class="fa fa-angle-right"></i> Answer</h3>
            <form method="post" action="<?php echo site_url('clarification/save_answer/'.$contest_id.'/'.$clar_id.'/');?>">
  					  <TEXTAREA name="answer" ROWS=10 COLS=100 ><?php echo $clarification->answer; ?></TEXTAREA>
  					  <br>
  					  <input class="btn btn-theme" type="submit" value="Submit" />
            </form>
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
     
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Developed by Enamul Hassan and Md. Khairullah Gaurab, CSE, SUST
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

     <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/js/jquery.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?> "></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('assets/js/jquery.dcjqaccordion.2.7.js') ?> "></script>
    <script src="<?php echo base_url('assets/js/jquery.scrollTo.min.js') ?> "></script>
    <!-- <script src="<?php echo base_url('assets/js/jquery.nicescroll.js') ?> " type="text/javascript"></script> -->
    <script src="<?php echo base_url('assets/js/jquery.sparkline.js') ?> "></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('assets/js/common-scripts.js') ?> "></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/js/gritter/js/jquery.gritter.js') ?> "></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/gritter-conf.js') ?> "></script>

    <!--script for this page-->
    <script src="<?php echo base_url('assets/js/sparkline-chart.js') ?> "></script>    
  <script src="<?php echo base_url('assets/js/zabuto_calendar.js') ?> "></script> 
	
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
