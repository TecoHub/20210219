<?php
//$current_date=date('Y-m-d');
session_start();
$val=$_REQUEST['select_amount'];
$val=explode("-" ,$val);   
$_SESSION['guestname']=$val[2];
 $_SESSION['tableno']=$val[1];
 $_SESSION['roomno']=$val[0];
 
	//header("Location: menu01.php");
echo "1";
?>