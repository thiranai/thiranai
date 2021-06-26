<?php



//$date      = date("Y/m/d");
//$expdate   = date('Y/m/d', strtotime('+1 years'));
//echo $date;
//echo "<br>";
//echo $expdate;
$com = getUserOS();
//echo(getUserOS());
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
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	<meta name="author" content="Bootstrap Website Templates">

	<title>ต่ออายุการใช้งาน</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	

	<!-- Bootstrap Core CSS -->
	<link href="error/css/bootstrap.min.css" rel="stylesheet">

	<!-- Theme CSS -->
	<link href="error/css/style.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">



</head>

<body>

	<div class="container text-center">
		<div class="brand">

			<h3 class="text-uppercase">โปรแกรมมั่วแพทเทิร์น 2020</h3>
		</div>		
			<font color="#FCED62" size="+2"><span>ขั้นตอนการต่ออายุการใช้งาน</span></font>		
<br>
		<img src="images/sale.png" class="img-fluid" alt="Responsive image">  <br>
		<a href="index.php" class="btn-outline" > <font color="#56C1C7">Back to Home</font></a>
		<p>
		<br>
		<div class="copyright">
					<div class="text-center">Copyright &copy; โปรแกรมมั่วแพทเทิร์น 2020. All Rights Reserved</div>
				</div>
	</div>

	

	<!-- jQuery -->
	<script src="error/js/jquery.min.js"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="error/js/bootstrap.min.js"></script>
	<!-- Theme JavaScript -->
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

</html>