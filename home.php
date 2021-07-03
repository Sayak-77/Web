<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
</head>
<link rel="stylesheet" type="text/css" href="homestyle.css">
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<body>
     <video src="particles.mp4" muted="" autoplay=""></video>
     <h1><span>Its a p</span>leasure to ha<span>ve y</span>ou, <?php echo $_SESSION['name']; ?>!</h1>
     <a class="god" href="index2.php">Welcome..!!</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>