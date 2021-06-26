<?php include 'database/conn.php';?>
<?php

//ตรวจข้อมูล Sesssion
session_start();
if ( !isset( $_SESSION[ 'u_user' ] ) ) {
	//echo "Please Login!";
	header( "location:login.php" );
	exit();
}
$user = $_SESSION[ 'u_user' ];
$status = $_SESSION[ 'u_status' ];
//-------############
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
		$u_datestart = date( 'Y/m/d', strtotime( "now" ) );
		$u_dateregister = $row[ "u_datestart" ];
		$u_datestop = $row[ "u_datestop" ];
	}
} else {
	//echo "0 results";
}
$conn->close();
//-----#################

//เช็ควันหมดอายุ
function DateDiff( $strDate1, $strDate2 ) {
	return ( strtotime( $strDate2 ) - strtotime( $strDate1 ) ) / ( 60 * 60 * 24 ); // 1 day = 60*60*24
}
$exp = DateDiff( $u_datestart, $u_datestop );
if ( $exp >= 0 ) {
	$exp = DateDiff( $u_datestart, $u_datestop );
} else {
	$exp = "0";
}
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
	<title>โปรแกรมมั่วแพทเทิร์น 2020 ฟรี ฟรี ฟรี</title>

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
</head>

<body text="#6E0C0E">

	<nav class="navbar  justify-content-center navbar-dark bg-dark align-center">
		<a class="navbar-text" href="index.php">ผู้ใช้:<font color="#4BF307"><?php echo($user) ?></font>  สถานะ:<font color="#F4FB05"><?php echo($status) ?></font> คงเหลือ:<font color="#F70004"><?php echo($exp) ?></font>วัน</a>;

	</nav>
	<nav class="navbar navbar-dark bg-dark">
		<a class="nav-link bg-info text-light btn-sm" href="index.php">หน้าหลัก</a>&nbsp;
		<a class="nav-link bg-warning text-light btn-sm" href="edit_register.php?u_id=<?php echo($u_id)?>&u_user=<?php echo($u_user)?>&u_pass=<?php echo($u_pass)?>&u_name=<?php echo($u_name)?>&u_tel=<?php echo($u_tel)?>&u_line=<?php echo($u_line)?>">เปลี่ยนรหัส</a>&nbsp;
		<a class="nav-link bg-danger text-light btn-sm" id="out" href="logout.php">ออกจากระบบ</a>
	</nav>

	<br>
	<center>
	<font  color="#186700" size="5">หากต้องการใช้งานอย่างต่อเนื่อง</font><br>
	<font  color="#C48703" size="5">อัพเกรดเป็นเวอร์ชั่นพรีเมี่ยม</font><br>
	<font  class="btn	 bg-danger text-light" color="#DD070B" size="5">เลือกแพ็กเกจ</font>
	</center>
	<table class="table">
		<tbody>
			<tr>
				<td align="center"><a  style="width:160px;height:230px" class="nav-link badge-light btn btn-outline-danger" href="sale.php" target="_blank"><font size="4"><b>แพ็กเกจที่ 1</b></font><br><font size="4"><b>1 เดือน</b></font><br><font size="4"><b>ราคา 100 บาท</b></font> <br><span class="badge badge-success">โปรโมชั่น ปี 2021</span><br><font size="3"  color="red">จากเดิม 1 เดือน</font><br><font size="3">เพิ่มเป็น</font><br><font size="3" color="#1C7B04"><b>1 เดือน 15 วัน</b></font></a>
				</td>
				<td align="center"><a  style="width:160px;height:230px" class="nav-link badge-light btn btn-outline-warning" href="sale.php" target="_blank"><font size="4"><b>แพ็กเกจที่ 2</b></font><br><font size="4"><b>2 เดือน</b></font><br><font size="4"><b>ราคา 200 บาท</b></font> <br><span class="badge badge-success">โปรโมชั่น ปี 2021</span><br><font size="3"  color="red">จากเดิม 2 เดือน</font><br><font size="3">เพิ่มเป็น</font><br><font size="3" color="#1C7B04"><b>3 เดือน</b></font></a>
				</td>
			</tr>
			<tr>
				<td align="center"><a  style="width:160px;height:230px" class="nav-link badge-light btn btn-outline-info" href="sale.php" target="_blank"><font size="4"><b>แพ็กเกจที่ 3</b></font><br><font size="4"><b>4 เดือน</b></font><br><font size="4"><b>ราคา 300 บาท</b></font> <br><span class="badge badge-success">โปรโมชั่น ปี 2021</span><br><font size="3"  color="red">จากเดิม 4 เดือน</font><br><font size="3">เพิ่มเป็น</font><br><font size="3" color="#1C7B04"><b>7 เดือน</b></font></a>
				</td>
				<td align="center"><a  style="width:160px;height:230px" class="nav-link badge-light btn btn-outline-success" href="sale.php" target="_blank"><font size="4"><b>แพ็กเกจที่ 4</b></font><br><font size="4"><b>1 ปี</b></font><br><font size="4"><b>ราคา 500 บาท</b></font> <br><span class="badge badge-success">โปรโมชั่น ปี 2021</span><br><font size="3"  color="red">จากเดิม 1 ปี</font><br><font size="3">เพิ่มเป็น</font><br><font size="3" color="#1C7B04"><b>1 ปี 3 เดือน</b></font></a>
				</td>
			</tr>			
		</tbody>
	</table>
	<script src="vendor/js/jquery-3.3.1.min.js"></script>
	<script src="vendor/js/popper.min.js"></script>
	<script src="vendor/js/bootstrap-4.3.1.js"></script>
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
<?php include 'footer.php';?>

</html>