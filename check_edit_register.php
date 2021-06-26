<?php include 'database/conn.php';?>
<?php
//ตรวจข้อมูล Sesssion
session_start();
if ( !isset( $_SESSION[ 'u_user' ] ) ) {
	//echo "Please Login!";
	header( "location:login.php" );
	exit();
}
$u_ids = $_SESSION[ 'u_id' ];
$u_users = $_SESSION[ 'u_user' ];
$u_statuss = $_SESSION[ 'u_status' ];
//-------############
?>
<?php
$sql = "UPDATE tb_users SET u_user='" . $_GET[ "u_user" ] . "',u_pass='" . $_GET[ "u_pass" ] . "',u_name='" . $_GET[ "u_name" ] . "',u_tel='" . $_GET[ "u_tel" ] . "',u_line='" . $_GET[ "u_line" ] . "' WHERE u_id='" . $_GET[ "u_id" ] . "'";
if ( $conn->query( $sql ) === TRUE ) {
	// echo "Update record created successfully";
	$message = "แก้ไขข้อมูลส่วนตัวสำเร็จ";
	echo "<script>alert('" . $message . "');window.location.href='indexshow.php';</script>";
	//header('Location: indexshow.php');
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>