<?php
//Landing mvc
include 'src/configs/Config.php';
include 'src/views/landing.php';
include 'src/controllers/landing.php';


//Read mvc

include 'src/controllers/read.php';
include 'src/models/read.php';
//GET and POST
include 'src/configs/CreateDB.php';



session_start();

$db = new initDB();
$db->createDB();

if(isset($_REQUEST['method'])){
	$controller = $_REQUEST['method'];
		$readController = new stormwind\hw3\controllers\ReadController();
		$readController->handlerRequest($_REQUEST);


}else{
$landingController = new stormwind\hw3\controllers\LandingController();
$landingController->handleRequest($_REQUEST);
}










?>


<!DOCTYPE html>
<html>
<head>
<title>Ouroboros Music Service</title>

</head>
<body>

</body>
</html>
