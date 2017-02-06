<?php
require_once 'include.php';
$act=$_REQUEST['act'];
if($act=='reg'){
    $mes=reg();
}elseif ($act=='login'){
    $mes=login();
}elseif ($act=='userOut'){
    $mes=userOut();
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<body>
	<?php
    	if($mes){
    		echo $mes;
    	}
    ?>
</body>
</html>