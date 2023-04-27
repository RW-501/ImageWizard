<?php 
			$ip = $_POST['ip'];
			$project_name = $_POST['pn'];


$path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/ImageWizard/Includes/db/db_MainConx.php";
   include($path);
// Set your timezone!!
date_default_timezone_set('America/Chicago');
	    $now =date('Y-m-d H:i:s');





	$sql1 = "INSERT INTO OrderTable
        			(orderProjectName, orderStartDate, orderDeleteBool, orderCompleteBool, orderUserIP ) VALUES
        			('$project_name' ,'$now' ,'NO' ,'NO' ,'$ip' )";
					
			$query1 = mysqli_query($db_conx, $sql1);
		$oid = mysqli_insert_id($db_conx);

		if($query1){
		echo "$oid";

	}else{
			echo "Error";
		}




















?>