<?php
/*echo "วันนี้",date('Y/m/d',strtotime("now")), "\n";
echo "ตั้งวันที่",date('Y/m/d',strtotime("10 September 2000")), "\n";
echo "1วัน",date('Y/m/d',strtotime("+1 day")), "\n";
echo "7วัน",date('Y/m/d',strtotime("+1 week")), "\n";
echo "4ชม.2น.7อ.2วัน",date('Y/m/d',strtotime("+1 week 2 days 4 hours 2 seconds")), "\n";
echo "วันพฤหัสหน้า",date('Y/m/d',strtotime("next Thursday")), "\n";
echo "วันจันทร์ที่แล้ว",date('Y/m/d',strtotime("last Monday")), "\n";

$date1=date_create("2020-06-01");
$date2=date_create("2020-06-07");
$diff=date_diff($date1,$date2);
echo $diff->format("เหลือ %a วัน");
*/
session_start();

if ( isset( $_SESSION[ 'u_user' ] ) ) {
	//echo "Please Login!";
	header( "location:indexshow.php" );
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>โปรแกรมมั่วแพทเทิร์น 2020 ฟรี ฟรี ฟรี</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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

<body text="#6E0C0E" class="bg-info">

	<div class="container mt-2">
		<div class="row">
			<div class="col-12">
				<div class="dropdown" align="center">
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong></i> ข่าวสาร! ติดต่อได้ที่ไลน์ : @959mktrj</strong>
						<marquee>
							<p style="font-family: Impact; font-size: 30pt">ปิดปรับปรุงชั่วคราว</p>
						</marquee>
					</div>					
				</div>
				
			</div>
		</div>
	</div>
	
	<script>
		<!-- Load Facebook SDK for JavaScript -->
		<
		div id = "fb-root" > < /div> <
			script >
			window.fbAsyncInit = function () {
				FB.init( {
					xfbml: true,
					version: 'v6.0'
				} );
			};

		( function ( d, s, id ) {
			var js, fjs = d.getElementsByTagName( s )[ 0 ];
			if ( d.getElementById( id ) ) return;
			js = d.createElement( s );
			js.id = id;
			js.src = 'https://connect.facebook.net/th_TH/sdk/xfbml.customerchat.js';
			fjs.parentNode.insertBefore( js, fjs );
		}( document, 'script', 'facebook-jssdk' ) );
	</script>

	<!-- Your customer chat code -->
	<div class="fb-customerchat" attribution=setup_tool page_id="104464844582196" logged_in_greeting="สวัสดีครับ! มีอะไรให้ช่วยเหลือ สามารถสอบถามมาทางแชทได้ตลอด 24 ชม. นะครับ" logged_out_greeting="สวัสดีครับ! มีอะไรให้ช่วยเหลือ สามารถสอบถามมาทางแชทได้ตลอด 24 ชม. นะครับ">
	</div>
	</script>
</body>

</html>