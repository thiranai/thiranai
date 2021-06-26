<?php include 'database/conn.php';?>
<?php
session_start();
$MAC = uniqid();
function getUserOS() {
	$osList = array(
		'Windows' => 'windows nt 6.1',
		'Windows' => 'windows nt 6.0',
		'Windows' => 'windows nt 5.2',
		'Windows' => 'windows nt 5.1',
		'Windows' => 'windows nt 5.01',
		'Windows' => 'windows nt 5.0',
		'Windows' => 'windows nt 4.0',
		'Windows' => 'win 9x 4.9',
		'Windows' => 'windows 98',
		'Windows' => 'windows 95',
		'Windows' => 'windows ce',
		'Windows' => 'windows',
		'OpenBSD' => 'openbsd',
		'SunOS' => 'sunos',
		'Ubuntu' => 'ubuntu',
		'Linux' => '(linux)|(x11)',
		'Mac OSX Beta (Kodiak)' => 'mac os x beta',
		'Mac OSX Cheetah' => 'mac os x 10.0',
		'Mac OSX Puma' => 'mac os x 10.1',
		'Mac OSX Jaguar' => 'mac os x 10.2',
		'Mac OSX Panther' => 'mac os x 10.3',
		'Mac OSX Tiger' => 'mac os x 10.4',
		'Mac OSX Leopard' => 'mac os x 10.5',
		'Mac OSX Snow Leopard' => 'mac os x 10.6',
		'Mac OSX Lion' => 'mac os x 10.7',
		'Mac OSX (version unknown)' => 'mac os x',
		'Mac OS (classic)' => '(mac_powerpc)|(macintosh)',
		'QNX' => 'QNX',
		'BeOS' => 'beos',
		'OS2' => 'os/2',
		'SearchBot' => '(nuhk)|(googlebot)|(yammybot)|(openbot)|(slurp)|(msnbot)|(ask jeeves/teoma)|(ia_archiver)'
	);
	$useragent = $_SERVER[ 'HTTP_USER_AGENT' ];
	$useragent = strtolower( $useragent );
	foreach ( $osList as $os => $match ) {
		if ( preg_match( '/' . $match . '/i', $useragent ) ) {
			break;
		} else {
			//$os = "Not automatically detected.<br />$useragent";  
			$os = "unknown";
		}
	}
	return $os;
}
$com = getUserOS();
$now = date( 'Y/m/d', strtotime( "now" ) );
$day = date( 'Y/m/d', strtotime( "+1 day" ) );
$week = date( 'Y/m/d', strtotime( "+1 day" ) );
$week2 = date( 'Y/m/d', strtotime( "+2 week" ) );
$month = date( 'Y/m/d', strtotime( "+1 month" ) );
$year = date( 'Y/m/d', strtotime( "+1 year" ) );

$sql = "SELECT * FROM tb_users WHERE  u_user='" . $_GET[ "txtUsername" ] . "'";
$result = $conn->query( $sql );
if ( $result->num_rows > 0 ) {
	// output data of each row
	while ( $row = $result->fetch_assoc() ) {


		$message = "มีชื่อผู้ใช้ : " . $_GET[ "txtUsername" ] . " อยู่แล้ว เข้าสู่ระบบได้เลยครับ!!!";
		echo "<script>alert('" . $message . "');window.location.href='login.php';</script>";

	}
} else {
	//echo "0 results";
	$sql1 = "INSERT INTO tb_users (u_user,u_pass,u_name,u_tel,u_line,u_date,u_status,u_active,u_datestart,u_datestop,u_register,u_mac) VALUES ('" . $_GET[ "txtUsername" ] . "','" . $_GET[ "txtPassword" ] . "','" . $_GET[ "txName" ] . "','" . $_GET[ "txtTel" ] . "','" . $_GET[ "txtLine" ] . "',NOW(),'user','0','" . $now . "','" . $week . "','" . $com . "','" . $MAC . "')";

	if ( $conn1->query( $sql1 ) === TRUE ) {

		$_SESSION[ 'u_user' ] = $_GET[ "txtUsername" ];
		$_SESSION[ 'u_status' ] = "user";
		$_SESSION[ "u_mac" ] = $MAC;
		//header( 'Location: indexshow.php' );
		//$message = "ลงทะเบียนสำเร็จ เข้าใช้งานได้เลยครับ";
		//echo "<script type='text/javascript'>alert('$message');</script>";
		$message = "ลงทะเบียนสำเร็จ เข้าใช้งานได้เลยครับ";
	echo "<script>alert('" . $message . "');window.location.href='indexshow.php';</script>";


	} else {
		echo "Error: " . $sql1 . "<br>" . $conn1->error;
	}
	$conn1->close();
}
$conn->close();



?>