<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>About</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/highcharts.js"></script>
  <script src="js/highcharts-exporting.js"></script>
  <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
 </head>
 <body>
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <br>
          <a class="navbar-brand" href="index.php" style="font-size:28px;">Islamiah Institute of Technology</a><br />
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
			<a href="teacher.php">Dashboard</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="student.php">Students</a></li>
           	<li><a href="statistics.php">Statistics</a></li>
			<li class="active"><a href="about.php">About</a></li>
            	<li><a href="contact.php">Contact</a></li>
			<li><a href="description.php">Description</a></li>
			<li><a href="logout.php">Logout</a>
		</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav></br></br></br></br>
  </div>
<br>

<h3><div>
      <dl class="dl-horizontal">
        <dd><h1 style="font-size: 50px;"><strong><b>Islamiah Institute of Technology</b></strong></h1></dd>
        <dd><h3>Opp. to Meenakshi Temple,<br>National Park Road,<br>Bangalore 560-076,<br>Karnataka, INDIA</h3></dd>
<br>

<dd><h2><strong>Our Location:</strong></h2></dd>
<dd>
<iframe width="650" height="400" src="https://maps.google.com/maps?width=650&amp;height=400&amp;hl=en&amp;cid=6643850922538727273&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="" scrolling="no" marginheight="" marginwidth=""></iframe>
</dd><br />
</div>
</h3>
</body>
</html>
