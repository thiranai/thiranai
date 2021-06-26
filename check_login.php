<?php
date_default_timezone_set("Asia/Bangkok");
//echo date_default_timezone_get();
session_start();
//ไอพี
$IP = $_SERVER[ 'REMOTE_ADDR' ];
$MAC = uniqid();
//echo($MAC);
//sql259.main-hosting.eu
//27.254.174.46
//localhost
$serverName = "sql259.main-hosting.eu";
$userName = "u160039800_aun";
$userPassword = "ubss2540";
$dbName = "u160039800_aun";

$objCon = mysqli_connect( $serverName, $userName, $userPassword, $dbName );
mysqli_set_charset( $objCon, "utf8" );
$objCon->query("SET time_zone='+07:00';");
$strSQL = "SELECT * FROM tb_users WHERE u_user = '" . mysqli_real_escape_string( $objCon, $_POST[ 'txtUsername' ] ) . "' 
	and u_pass = '" . mysqli_real_escape_string( $objCon, $_POST[ 'txtPassword' ] ) . "'";
$objQuery = mysqli_query( $objCon, $strSQL );

$objResult = mysqli_fetch_array( $objQuery, MYSQLI_ASSOC );
if ( !$objResult ) {
	   $message = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง เข้าสู่ระบบใหม่อีกครั้ง!!!";
		echo "<script>alert('" . $message . "');window.location.href='login.php';</script>";
	//echo "Username and Password Incorrect!";
} else {
	$_SESSION[ "u_id" ] = $objResult[ "u_id" ];
	$_SESSION[ "u_user" ] = $objResult[ "u_user" ];
	$_SESSION[ "u_status" ] = $objResult[ "u_status" ];
	$_SESSION[ "u_mac" ] = $MAC;
	//session_write_close();
	$user = $objResult[ "u_user" ];
	$uid = $objResult[ "u_id" ];



	if ( $objResult[ "u_status" ] == "admin" ) {


		$sql = "INSERT INTO tb_login (u_users, l_ip, l_timein, l_timeout, l_mac) VALUES ('" . $user . "','" . $IP . "',NOW(),NOW(),'" . $MAC . "')";
		
		if ( $objCon->query( $sql ) === TRUE ) {
			//$message = "ลงทะเบียนสำเร็จ เข้าใช้งานได้เลยครับ";	
		} else {
			echo "Error: " . $sql . "<br>" . $objCon->error;
		}

		$sql1 = "UPDATE tb_users SET u_mac='" . $MAC . "' WHERE u_id='" . $uid . "'";
		if ( $objCon->query( $sql1 ) === TRUE ) {
			//echo "Update record created successfully";
			//header('Location: frm_baccarat.php');
		} else {
			echo "Error: " . $sql1 . "<br>" . $objCon->error;
		}
		
		include 'database/conn.php';
		//แสดงข้อมูลเวลา
$sql = "SELECT * FROM tb_login WHERE u_users='".$user."' GROUP BY l_id DESC LIMIT 1";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
	// output data of each row
	while ( $row = $result->fetch_assoc() ) {
		$_SESSION[ "l_id" ] = $row[ "l_id" ];
		//echo ($_SESSION[ "l_id" ]);
		
	}
} else {
	//echo "0 results";
}

//-----#################
		header( "location:admin/index.php" );

	} else {

		$sql = "INSERT INTO tb_login (u_users, l_ip, l_timein, l_timeout, l_mac) VALUES ('" . $user . "','" . $IP . "',NOW(),NOW(),'" . $MAC . "')";

		if ( $objCon->query( $sql ) === TRUE ) {
			//$message = "ลงทะเบียนสำเร็จ เข้าใช้งานได้เลยครับ";	
		} else {
			echo "Error: " . $sql . "<br>" . $objCon->error;
		}

		$sql1 = "UPDATE tb_users SET u_mac='" . $MAC . "' WHERE u_id='" . $uid . "'";
		if ( $objCon->query( $sql1 ) === TRUE ) {
			//echo "Update record created successfully";
			//header('Location: frm_baccarat.php');
		} else {
			echo "Error: " . $sql1 . "<br>" . $objCon->error;
		}
		
		include 'database/conn.php';
		//แสดงข้อมูลเวลา
$sql = "SELECT * FROM tb_login WHERE u_users='".$user."' GROUP BY l_id DESC LIMIT 1";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
	// output data of each row
	while ( $row = $result->fetch_assoc() ) {
		$_SESSION[ "l_id" ] = $row[ "l_id" ];
		//echo ($_SESSION[ "l_id" ]);
		
	}
} else {
	//echo "0 results";
}

//-----#################
		header( "location:indexshow.php" );
	}
}
mysqli_close( $objCon );
session_write_close();
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/loading.css" />  
    </head>
    <body onload="myFunction()">
       <div id="loading"><center><font size="+2" color="#F9F7F7">กรุณารอสักครู่....</font></center></div>
       <script>		
		var preloader = document.getElementById("loading");
		function myFunction(){
			preloader.style.display = 'none';
		};
</script> 
	</body>
		</html>