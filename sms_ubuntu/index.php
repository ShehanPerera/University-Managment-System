<?php
	//Start session
	//session_start();
	
	//Unset the variables stored in session
	
	//unset($_SESSION['SESS_MEMBER_ID']);
	//unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>
	
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="assets/img/metis-tile.png" />
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/lib/magic/magic.css">
    <script>
      (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-1669764-16', 'onokumus.com');
      ga('send', 'pageview');
    </script>
    <style type="text/css">
      <!--
      .style2 {
        color: #428BCA;
        font-size: 24px;
      }
      .style3 {font-size: 26px}
      -->
    </style>
  </head>
  
  <body class="login">
    <div class="container">
      <div class="text-left">
        <p align="left"><img src="assets/img/logo1.png" alt="Metis Logo" width="50%"></p>
        <p align="center"><img src="assets/img/logo.png" alt="Metis Logo" width="50%"></p>
        <p><img src="assets/img/line.png" alt="Metis Logo" width="100%"></p>
        <p></p>
      </div><!-- /text-left -->
  
      
      
      <div class="text-center">
        <ul class="list-inline">
		<h3>
		<li> <a class="text-muted" href="../UMS/index_multi.php" >UMS</a> </li><br>
          <li> <a class="text-muted" href="../UMS/login.php" >Login</a> </li><br>
		   <li> <a class="text-muted" href="../UMS/CreateNew.php" >Create New Account</a> </li><br>
         
		  </h3>
        </ul>
      </div><!-- /text-center -->
    </div><!-- /container -->
    
    <script src="assets/lib/jquery.min.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
    <script>
      $('.list-inline li > a').click(function() {
        var activeForm = $(this).attr('href') + ' > form';
        //console.log(activeForm);
        $(activeForm).addClass('magictime swap');
        //set timer to 1 seconds, after that, unload the magic animation
        setTimeout(function() {
          $(activeForm).removeClass('magictime swap');
        }, 1000);
      });
    </script>
  </body>
</html>
<style>
.ul.li.a
{
	font-size:30px;
}
