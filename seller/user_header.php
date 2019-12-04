<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="../css/css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/css/defined.css">
    <link rel="shortcut icon" href="../images/favicon.png">
    <!-- Font-icon css-->
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.css">
    <title>Agroconnect</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
    <script type="text/javascript">
        window.onload = initClock;

        function initClock() {
          var now = new Date();
          var hr  = now.getHours();
          var min = now.getMinutes();
          var sec = now.getSeconds();
          if (min < 10) min = "0" + min;  // insert a leading zero
          if (sec < 10) sec = "0" + sec;
          document.getElementById('clockDisplay').innerHTML
                = hr + ":" + min + ":" + sec;
          setTimeout('initClock()', 500);
        }
    </script>
  </head>
  <body class="sidebar-mini fixed  pace-done"><div class="pace  pace-inactive"><div data-progress="99" data-progress-text="100%" style="transform: translate3d(100%, 0px, 0px);" class="pace-progress">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header hidden-print"><a class="logo" href=""><img src="../images/logo2.png" alt=""></a>
        <nav class="navbar navbar-static-top">
          <!-- Sidebar toggle button--><a class="sidebar-toggle" href="#" data-toggle="offcanvas"></a>
          <!-- Navbar Right Menu-->
          <div class="navbar-custom-menu">
            <ul class="top-nav">
              <!--Notification Menu-->
              <li class="dropdown notification-menu"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">07-Mar-2018 <span id="clockDisplay">1:47:42</span></a>
                <ul class="dropdown-menu">
                  <li class="not-head">You have 4 new notifications.</li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Server Not Working</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li><a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                      <div class="media-body"><span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span></div></a></li>
                  <li class="not-footer"><a href="#">See all notifications.</a></li>
                </ul>
              </li>
              <!-- User Menu-->
              <li class="dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user fa-lg"></i></a>
                <ul class="dropdown-menu settings-menu">
                  <li><a href=""><i class="fa fa-cog fa-lg"></i> Settings</a></li>
                  <li><a href=""><i class="fa fa-user fa-lg"></i> Profile</a></li>
                  <li><a href="http://portal.stjosephschoolsng.com/admin_dashboard.php?logout"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print">
        <div style="position: relative; overflow: hidden; width: auto; height: 588px;" class="slimScrollDiv"><section style="overflow: hidden; width: auto; height: 588px;" class="sidebar">
          <div class="user-panel">
            <div class="pull-left image"><img class="img-circle img-responsive" src="../images/favicon.png" alt="User Image" width="50"></div>
            <div class="pull-left info">
              <p></p>
              <p class="designation text-center"><b>Agroconnect</b></p>
              <br>
            </div>
          </div>
          <!-- Sidebar Menu-->
          <ul class="sidebar-menu">
<!--            <li class="active"><a href="user_dashboard.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>-->
            <li class="active"><a href="profile.php"><i class="fa fa-user"></i><span>Profile</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-laptop"></i><span>View Order</span></a></li>
            <li class="treeview"><a href="student_registration.php"><i class="fa fa-laptop"></i><span>Pending Reveiw</span></a>
            </li>
            <li><a href="#"><i class="fa fa-pie-chart"></i><span>Check Payment</span></a></li>
            <li><a href="#"><i class="fa fa-eye"></i><span>Monitor delivery</span></a></li>
            <li class="treeview"><a href="#"><i class="fa fa-edit"></i><span>Change Password</span></a>
            </li>

          </ul>
        </section><div style="background: rgba(0, 0, 0, 0.8) none repeat scroll 0% 0%; width: 3px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 374.587px;" class="slimScrollBar"></div><div style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;" class="slimScrollRail"></div></div>
      </aside>