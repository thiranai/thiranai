<?php include 'database/conn.php';?>
<?php

//ตรวจข้อมูล Sesssion
session_start();
if ( !isset( $_SESSION[ 'u_user' ] ) ) {
	//echo "Please Login!";
	include 'login.php';
	exit();
}
$user = $_SESSION[ 'u_user' ];
$status = $_SESSION[ 'u_status' ];
//-----##############
//-------###อัพการใช้งาน#########
$l_id = $_SESSION[ 'l_id' ];
$sql9 = "UPDATE tb_login SET l_timeout=NOW() WHERE l_id='" . $l_id . "'";
if ( $conn->query( $sql9 ) === TRUE ) {
	// echo "Update record created successfully";
	//$message = "แก้ไขข้อมูลส่วนตัวสำเร็จ";
	//echo "<script>alert('" . $message . "');window.location.href='indexshow.php';</script>";
	//header('Location: indexshow.php');
} else {
	echo "Error: " . $sql9 . "<br>" . $conn->error;
}
//-------############

//แสดงข้อมูลสมาชิก
$sql = "SELECT * FROM tb_users WHERE u_user='$user'";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
	// output data of each row
	while ( $row = $result->fetch_assoc() ) {
		$u_mac = $row[ "u_mac" ];
		$u_id = $row[ "u_id" ];
		$u_user = $row[ "u_user" ];
		$u_pass = $row[ "u_pass" ];
		$u_name = $row[ "u_name" ];
		$u_tel = $row[ "u_tel" ];
		$u_line = $row[ "u_line" ];
	}
} else {
	//echo "0 results";
}
$conn->close();
//-----##############

//เช็คเข้าใช้ครั้งละ 1 คน
if ( $_SESSION[ 'u_mac' ] != $u_mac ) {
	//echo "มีผู้อื่นใช้อยู่";
	$message = "เนื่องจากท่านลืมออกจากระบบครั้งก่อนหน้านี้ กรุณาเข้าสู่ระบบอีกครั้ง!! ";
	echo "<script>alert('" . $message . "');window.location.href='logout.php';</script>";
}
//---###################

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="icon" type="image/png" href="images/icons/newicon.ico"/>
	<!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">

	<script language="JavaScript">
		var isNS = ( navigator.appName == "Netscape" ) ? 1 : 0;

		if ( navigator.appName == "Netscape" ) document.captureEvents( Event.MOUSEDOWN || Event.MOUSEUP );

		function mischandler() {
			return false;
		}

		function mousehandler( e ) {
			var myevent = ( isNS ) ? e : event;
			var eventbutton = ( isNS ) ? myevent.which : myevent.button;
			if ( ( eventbutton == 2 ) || ( eventbutton == 3 ) ) return false;
		}
		document.oncontextmenu = mischandler;
		document.onmousedown = mousehandler;
		document.onmouseup = mousehandler;
	</script>
	<link rel="stylesheet" type="text/css" href="css/loading.css" />
</head>

<body text="#6E0C0E">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-text" href="index.php">ชื่อผู้ใช้ : <font color="#4BF307"><?php echo($user) ?></font></a>&nbsp;<a class="nav-link bg-info text-light btn-sm" href="index.php"><i class="fa fa-reply-all" aria-hidden="true">&nbsp;หน้าหลัก</i></a>&nbsp;
		<a class="nav-link bg-danger text-light btn-sm" id="out" href="logout.php">Logout</a>
		</p>
	</nav>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap-4.3.1.js"></script>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v7.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="104464844582196"
  logged_in_greeting="สวัสดีครับ! มีอะไรให้ช่วยเหลือ สามารถสอบถามมาทางแชทได้ตลอด 24 ชม. นะครับ"
  logged_out_greeting="สวัสดีครับ! มีอะไรให้ช่วยเหลือ สามารถสอบถามมาทางแชทได้ตลอด 24 ชม. นะครับ">
      </div>
</body>
<?php //include 'footer.php';?>

</html>