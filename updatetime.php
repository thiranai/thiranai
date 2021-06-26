<?php include 'database/conn.php';
//-------###อัพการใช้งาน#########
//ตรวจข้อมูล Sesssion
session_start();
$l_id = $_SESSION[ 'l_id' ];
$sql99 = "UPDATE tb_login SET l_timeout=NOW() WHERE l_id='" . $l_id . "'";
if ( $conn->query( $sql99 ) === TRUE ) {
	//echo ($l_id);
	//$message = "แก้ไขข้อมูลส่วนตัวสำเร็จ";
	//echo "<script>alert('" . $message . "');window.location.href='indexshow.php';</script>";
	//header('Location: indexshow.php');
} else {
	echo "Error: " . $sql99 . "<br>" . $conn->error;
}
//-------############
?>
