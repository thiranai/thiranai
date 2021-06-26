<?php
$com = getUserOS();
//echo($com);
if ( $com == "Windows" ) {
	//header("location:error/");
}

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
	<title>ลงทะเบียน</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/newicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fontawesome/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css/util.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/main.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/loading.css" />
	<script>
	function check()
	{
		var elem = document.getElementById('txtUsername').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			//alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
			document.getElementById('txtUsername').value = "";
			document.getElementById('txtUsername').placeholder = "Username เช่น Patturn1";
		}
		
		
		
		
		
	}
	function check1()
	{
		var elem1 = document.getElementById('txtPassword').value;
		if(!elem1.match(/^([a-z0-9])+$/i))
		{
			//alert("กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น");
			document.getElementById('txtPassword').value = "";
			document.getElementById('txtPassword').placeholder = "Password เช่น P1234";
		}
	}
	function check2()
	{
		var elem2 = document.getElementById('txtTel').value;
		if(!elem2.match(/^([0-9])+$/i))
		{
			//alert("กรอกได้เฉพาะตัวเลขเท่านั้น");
			document.getElementById('txtTel').value = "";
			document.getElementById('txtTel').placeholder  = "เบอร์โทรศัพท์";
		}
	}
	
</script>


</head>

<body>

	<div class="limiter">
		<div class="container-login100">

			<div class="login100-pic js-tilt" data-tilt>
					<img src="images/icons/newicon.ico" alt="IMG">
			</div>

			<form class="login100-form validate-form" name="form1" method="GET" action="check_register.php">
				<div class="js-tilt" data-tilt>
					<center><img width="50" height="50" src="images/icons/newicon.ico" alt="IMG"></center>
				</div>
					<span class="login100-form-title text-warning">
						ลงทะเบียนเข้าใช้งานฟรี
					</span>
			

				<div class="wrap-input100 validate-input" data-validate="กรุณากรอก Username เช่น : thai01 กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น">
					<input class="input100" name="txtUsername" type="text" id="txtUsername" onblur="check();" placeholder="Username เช่น Patturn1">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
				
				</div>
			
				<div class="wrap-input100 validate-input" data-validate="กรุณากรอก Password เช่น : thai2020 กรอกได้เฉพาะตัวเลขและตัวอักษรภาษาอังกฤษเท่านั้น">
					<input class="input100" name="txtPassword" type="text" id="txtPassword" onblur="check1();"  placeholder="Password เช่น P1234">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-key" aria-hidden="true"></i>
						</span>
				
				</div>
				
				<div class="wrap-input100 validate-input" data-validate="กรุณากรอก ชื่อ-นามสกุล เช่น : รุ่งเรือง มีชัย">
					<input class="input100" name="txName" type="text" id="txName" placeholder="ชื่อ-นามสกุล">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-id-badge" aria-hidden="true"></i>
						</span>
				
				</div>
				<div class="wrap-input100 validate-input" data-validate="กรุณากรอก เบอร์โทรศัพท์ เช่น : 0912345678 กรอกได้เฉพาะตัวเลขเท่านั้น">
					<input maxlength="10" class="input100" name="txtTel" type="text" id="txtTel" onblur="check2();"  placeholder="เบอร์โทรศัพท์ ">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-mobile" aria-hidden="true"></i>
						</span>
				
				</div>

				<div class="wrap-input100 validate-input" data-validate="กรุณากรอก ไอดีไลน์ เช่น : thai02">
					<input class="input100" name="txtLine" type="text" id="txtLine" placeholder="ไอดีไลน์">
					<span class="focus-input100"></span>
					<span class="symbol-input100">
							<i class="fa fa-commenting-o" aria-hidden="true"></i>
						</span>
				
				</div>

				<div class="container-login100-form-btn">
					<input type="submit" name="Submit" value="ลงทะเบียน" class="login100-form-btn">
				</div>
				<div class="container-login100-form-btn">
					<a class="txt2 btn btn-warning" href="index.php">
							ย้อนกลับ
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
				
				</div>
			</form>
		</div>
	</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$( '.js-tilt' ).tilt( {
			scale: 1.1
		} )
	</script>
	<!--===============================================================================================-->
	<script src="vendor/js/main.js"></script>

<script>		
		var preloader = document.getElementById("loading");
		function myFunction(){
			preloader.style.display = 'none';
		};
</script> 
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