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
$sql = "UPDATE tb_money SET x1='".$_GET["x1"]."',x2='".$_GET["x2"]."',x3='".$_GET["x3"]."',x4='".$_GET["x4"]."',x5='".$_GET["x5"]."',x6='".$_GET["x6"]."',x7='".$_GET["x7"]."',x8='".$_GET["x8"]."',x9='".$_GET["x9"]."',x10='".$_GET["x10"]."',x11='".$_GET["x11"]."',x12='".$_GET["x12"]."' WHERE m_id='".$_GET["m_id"]."'";
if ($conn->query($sql) === TRUE) {
    echo "Update record created successfully";
	header('Location: frm_sidie.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>