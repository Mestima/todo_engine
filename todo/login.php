<?php
  if(!empty($_POST['paswd'])){
     $pass = "yourpassword"; /* enter password here */
    if($_POST['paswd']==$pass){
      session_start();
      $_SESSION['access']=true;
      header("Location: edit.php") ;
    }
    else {
       header("Location: error.php") ;
    }
  }
  else
  {
    ?>
<html>
	<head>
		<title>TO DO</title>
		<link href="https://fonts.googleapis.com/css?family=Marck+Script|Pacifico|Press+Start+2P|Stalinist+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Bad+Script|Marck+Script|Neucha|Ruslan+Display" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body align="center" style="background-image:url(img/shattered.png);">
		<p><h3><b> Welcome to To Do list. </h3></b></p>
		<p><h5>Please, enter password.</h5></p>
		<form method="POST">
			<input type="text" name="paswd">
			<input type="submit" value="LOGIN">
		</form>
		<p>___________________________________________________</p>
		<p>
			<a href='http://nilored.ru' target="_blank">2016-2018 © NILORED Team & Mestima</a>
		</p>
	</body>
</html>
	
    <?php
  }
?>