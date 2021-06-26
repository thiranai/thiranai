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
//ตรวจข้อมูล Sesssion
session_start();
if ( isset( $_SESSION[ 'u_user' ] ) ) {
	//echo "Please Login!";
	header( "location:indexshow.php" );
	exit();
}



//-------############
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>โปรแกรมมั่วแพทเทิร์น ฟรี ฟรี ฟรี</title>
        <!-- Bootstrap Styles-->
    
    <!-- Morris Chart Styles-->
    <link href="admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="admin/assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link rel="icon" type="image/png" href="images/icons/newicon.ico"/>
         <link href="admin/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/loading.css" />
    </head>
	<!-- เมนูข้ด้านบน -->
    <body class="sb-nav-fixed text-light" background=""> 
 
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">มั่วแพทเทิร์นออนไลน์</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
            >    
  <ul class="navbar-nav ml-auto ml-md-0">
			<a class="btn btn-primary bg-success btn-lg" href="login.php"><span class="spinner-grow spinner-grow-sm"></span>LOGIN</a>
                
            </ul>			
        </nav>       
		<!-- เมนูด้านบน -->
		<!-- เมนูด้านข้าง -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">เมนู</div>
                            <a class="nav-link" href="index.php"
                                ><div class="sb-nav-link-icon"></div>
                                หน้าแรก
                                </a
                            >                            
                            <a class="nav-link" href="frm_baccarat.php"
                                ><div class="sb-nav-link-icon"></div>
                                เกมบาคาร่า
                                </a
                            >
                            <a class="nav-link" href="frm_roulette.php"
                                ><div class="sb-nav-link-icon"></div>
                                เกมรูเล็ต
                                </a
                            >
                            <a class="nav-link" href="frm_sicbo.php"
                                ><div class="sb-nav-link-icon"></div>
                                เกมซิกโบหรือไฮโล
                                </a
                            >
                            <a class="nav-link" href="frm_dragon.php"
                                ><div class="sb-nav-link-icon"></div>
                                เกมมังกรเสือ
                                </a
                            >
                            <a class="nav-link" href="frm_fantan.php"
                                ><div class="sb-nav-link-icon"></div>
                                เกมกำถั่ว
                                </a
                            >
                            <a class="nav-link" href="frm_keno.php"
                                ><div class="sb-nav-link-icon"></div>
                                เกม  KENO
                                </a
                            >
                            <a class="nav-link" href="frm_pk.php"
                                ><div class="sb-nav-link-icon"></div>
                                เกม PK10
                                </a
                            >
                            <div class="sb-sidenav-menu-heading">เกี่ยวกับ</div>
                            <a class="nav-link" href="about.php"
                                ><div class="sb-nav-link-icon"></div>
                                ติดต่อเรา
                                </a
                            >                            
                        </div>
                    </div>                    
                </nav>
            </div>
			<!-- เมนูด้านข้าง -->
			<!----เนื้อหา---->
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid bg-dark">
                       <br> 
                                 <div class="dropdown" align="center">
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong><i class="fa fa-warning"></i> ข่าวสาร!</strong>
						<marquee>
							<p style="font-family: Impact; font-size: 12pt">ประกาศ 30/03/2564 ทางเว็บจะลดวันทดลองเล่นของสมาชิกใหม่ เหลือแค่ 1 วัน เนื่องจากมีผู้กระทำผิดกฏของทางเว็บเป็นจำนวนมาก ขออภัยใว้ ณ ที่นี้ด้วย</p>
						</marquee>
					</div>
					<div class="js-tilt" data-tilt>
					<center><img width="100" height="100" src="images/icons/newicon.ico" alt="IMG"></center>
				</div>
				<br>
				<h6>ถ้าท่านยังไม่มีชื่อผู้ใช้และรหัสผ่าน</h6>
				<h6>!!คลิ๊กด้านล่างได้เลย!!</h6>
					<a class="btn btn-warning  btn-lg" href="register.php"><span class="spinner-grow spinner-grow-sm"></span>สมัครสมาชิก</a>	
						<br><font size="5">วิธีใช้งานโปรแกรม</font><br>
						
<video width="320" height="240" controls autoplay>
  <source src="videoshow.mp4" type="video/mp4">  
      เบราว์เซอร์ของคุณไม่รองรับแท็กวิดีโอนี้
</video>
				</div>
				<br>
				<center>
				<a href="https://play.google.com/store/apps/details?id=com.developer.arsltech.thiranai"  target="_blank">
<img border="0"  src="images/gp.png" width="300" height="300" class="img-fluid" alt="Responsive image">
</a>
				<a href="https://drive.google.com/file/d/1i4Fjnp2yHKZaq5U9PqEUrfXdjOd-BrHW/view?usp=sharing"  target="_blank">
<img border="0"  src="images/apk.png" width="200" height="200" class="img-fluid" alt="Responsive image">
</a>&nbsp;
			<a href="https://drive.google.com/file/d/1hvOxP7DyjDwNYX-1JKUSEKmiqSM6ZjRH/view?usp=sharing"  target="_blank">
<img border="0"  src="images/windows.png" width="200" height="200" class="img-fluid" alt="Responsive image">
</a><br>
				<img src="images/bg.png" class="img-fluid" alt="Responsive image">      
                       </center>   
                       <br>
                       <center><div class="container-fluid">
                       <!-- Histats.com  (div with counter) -->
	<div id="histats_counter"></div>
	<!-- Histats.com  START  (aync)-->
	<script type="text/javascript">
		var _Hasync = _Hasync || [];
		_Hasync.push( [ 'Histats.start', '1,4374141,4,436,112,75,00011101' ] );
		_Hasync.push( [ 'Histats.fasi', '1' ] );
		_Hasync.push( [ 'Histats.track_hits', '' ] );
		( function () {
			var hs = document.createElement( 'script' );
			hs.type = 'text/javascript';
			hs.async = true;
			hs.src = ( '//s10.histats.com/js15_as.js' );
			( document.getElementsByTagName( 'head' )[ 0 ] || document.getElementsByTagName( 'body' )[ 0 ] ).appendChild( hs );
		} )();
	</script>
	<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4374141&101" alt="" border="0"></a></noscript>
	<!-- Histats.com  END  -->


	<!-- Copyright -->
	
		
		<?php
		$IP = $_SERVER[ 'REMOTE_ADDR' ];

		// $IP stores the ip address of client 
		echo "Client's IP address is: $IP";

		?>
		<br>
		<?php

		function checkDevice() {
			// checkDevice() : checks if user device is phone, tablet, or desktop
			// RETURNS 0 for desktop, 1 for mobile, 2 for tablets

			if ( is_numeric( strpos( strtolower( $_SERVER[ 'HTTP_USER_AGENT' ] ), "mobile" ) ) ) {
				return is_numeric( strpos( strtolower( $_SERVER[ 'HTTP_USER_AGENT' ] ), "tablet" ) ) ? 2 : 1;
			} else {
				return 0;
			}
		}
		$deviceType = checkDevice();
		if ( $deviceType == 0 ) {
			echo "ใช้งานผ่าน คอมพิวเตอร์";
		} else if ( $deviceType == 1 ) {
			echo "ใช้งานผ่าน PHONE OR MOBILE";
		} else {
			echo "ใช้งานผ่าน TABLET";
		}

		?>
	</div>
	<!-- Copyright -->
                      <div class="d-flex align-items-center justify-content-between small ">
                            <div class="text-dark">Copyright &copy; thiranai.xyz</div>
                            <div class="text-dark">
                                <a href="https://thiranai.xyz">Smartphone</a>
                                &middot;
                                <a href="https://bit.ly/32dQCwR">Computer</a>
                            </div>
                        </div>
                    </div>
                       </center>        
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    
                        
                </footer>
            </div>
			<!----เนื้อหา---->
        </div>
         <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin/js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="admin/assets/demo/datatables-demo.js"></script>
        
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
