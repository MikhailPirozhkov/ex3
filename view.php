<?php require_once 'controller.php';?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Погода в городе <?php echo $weather->getCity(); ?></title>
</head>
<body>


<?php
	echo $weather."<br>";
	echo $weather->getTemp()."<br>";
	echo $weather->getType();
?>


</body>
</html>