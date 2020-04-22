<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> Player <strong><?php echo $_SESSION['id']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

<div>
<br /><br /><br /><br /><br /><br /><br />



</div>
	
	
<div class = "content">	
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS6Y3iLUKiUygnIe5G_iH_SW-kdGhChFeuezDX5qPhdyiRp2cN7&usqp=CAU" alt="RGT img" width="180" height="90">
	<img src="https://i.pcmag.com/imagery/reviews/	01wBgzKlCiildlmfiJHDQ5Y-9.fit_scale.size_1028x578.v_1569474703.jpg" alt="Link to Strava" width="180" height="90">
	<br>
	<button type="button" style="width:365px" onclick="strava_link(25207,'localhost/rgtranking/registration/index.php')">Authorize</button>
	<script type="text/javascript" src="scripts.js"></script>
	<br>
	<button type="button" style="width:365px" onclick="goto_ranking()">See Ranking</button>
	<br>
	<?php include 'get_strava_tokens.php';?>
</div>	

		
</body>
</html>