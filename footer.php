<!-- Footer -->
<footer class="page-footer font-small  text-center">


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
	<div class="footer-copyright text-center py-3">© 2020 Copyright:
		<a href="http://thiranai.xyz/">Thiranai.xyz</a>
		<br>
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
</footer>
<!-- Footer -->