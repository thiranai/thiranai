<?php include 'indexshow1.php';?>
<?php include 'database/conn.php';?>
<?php
	$kp = 1.95;
	$kb = 1.95;
	$u_user = $_SESSION["u_user"];
	$c_id = "09";
	$m_wood = "22";
	//m_id='63' AND
	$sql = "SELECT * FROM tb_money WHERE  u_user='" . $u_user . "' AND m_wood='" . $m_wood . "' AND c_id='" . $c_id . "'";
	$result = $conn->query( $sql );
	if ( $result->num_rows > 0 ) {
		// output data of each row
		while ( $row = $result->fetch_assoc() ) {
			$x1 = $row[ "x1" ];
			$x2 = $row[ "x2" ];
			$x3 = $row[ "x3" ];
			$x4 = $row[ "x4" ];
			$x5 = $row[ "x5" ];
			$x6 = $row[ "x6" ];
			$x7 = $row[ "x7" ];
			$x8 = $row[ "x8" ];
			$x9 = $row[ "x9" ];
			$x10 = $row[ "x10" ];
			$x11 = $row[ "x11" ];
			$x12 = $row[ "x12" ];
			$x12 = $row[ "x12" ];
			$x12 = $row[ "x12" ];
			$x12 = $row[ "x12" ];
			$m_id = $row[ "m_id" ];			
		}
	} else {
		//echo "0 results";
	}
	$conn->close();
	?>
	<?php
	error_reporting( E_ALL ^ E_NOTICE );
	if ( $x1 != null && $x2 != null && $x3 != null && $x4 != null && $x5 != null && $x6 != null && $x7 != null && $x8 != null && $x9 != null && $x10 != null && $x11 != null && $x12 != null ) {
		// กรณีมีค่า ไม่เท่ากับ null  และ ไม่เท่ากับ ''  จะถูกเซทเป็นจริง	
		$l1 = $x1; //ขาดทุนรวม
		$l2 = $x2 + $l1;
		$l3 = $x3 + $l2;
		$l4 = $x4 + $l3;
		$l5 = $x5 + $l4;
		$l6 = $x6 + $l5;
		$l7 = $x7 + $l6;
		$l8 = $x8 + $l7;
		$l9 = $x9 + $l8;
		$l10 = $x10 + $l9;
		$l11 = $x11 + $l10;
		$l12 = $x12 + $l11;
		$p1 = $x1 * $kp - $l1;
		$p2 = $x2 * $kp - $l2;
		$p3 = $x3 * $kp - $l3;
		$p4 = $x4 * $kp - $l4;
		$p5 = $x5 * $kp - $l5;
		$p6 = $x6 * $kp - $l6;
		$p7 = $x7 * $kp - $l7;
		$p8 = $x8 * $kp - $l8;
		$p9 = $x9 * $kp - $l9;
		$p10 = $x10 * $kp - $l10;
		$p11 = $x11 * $kp - $l11;
		$p12 = $x12 * $kp - $l12;
		$b1 = $x1 * $kb - $l1;
		$b2 = $x2 * $kb - $l2;
		$b3 = $x3 * $kb - $l3;
		$b4 = $x4 * $kb - $l4;
		$b5 = $x5 * $kb - $l5;
		$b6 = $x6 * $kb - $l6;
		$b7 = $x7 * $kb - $l7;
		$b8 = $x8 * $kb - $l8;
		$b9 = $x9 * $kb - $l9;
		$b10 = $x10 * $kb - $l10;
		$b11 = $x11 * $kb - $l11;
		$b12 = $x12 * $kb - $l12;
	} else {
		// กรณีมีค่า เป็น null หรือ ''  จะถูกเซทเป็นเท็จ		
		$x1 = "10";
		$x2 = "20";
		$x3 = "40";
		$x4 = "90";
		$x5 = "180";
		$x6 = "370";
		$x7 = "760";
		$x8 = "1560";
		$x9 = "3200";
		$x10 = "6570";
		$x11 = "13490";
		$x12 = "27690";
		$l1 = $x1; //ขาดทุนรวม
		$l2 = $x2 + $l1;
		$l3 = $x3 + $l2;
		$l4 = $x4 + $l3;
		$l5 = $x5 + $l4;
		$l6 = $x6 + $l5;
		$l7 = $x7 + $l6;
		$l8 = $x8 + $l7;
		$l9 = $x9 + $l8;
		$l10 = $x10 + $l9;
		$l11 = $x11 + $l10;
		$l12 = $x12 + $l11;
		$p1 = $x1 * $kp - $l1;
		$p2 = $x2 * $kp - $l2;
		$p3 = $x3 * $kp - $l3;
		$p4 = $x4 * $kp - $l4;
		$p5 = $x5 * $kp - $l5;
		$p6 = $x6 * $kp - $l6;
		$p7 = $x7 * $kp - $l7;
		$p8 = $x8 * $kp - $l8;
		$p9 = $x9 * $kp - $l9;
		$p10 = $x10 * $kp - $l10;
		$p11 = $x11 * $kp - $l11;
		$p12 = $x12 * $kp - $l12;
		$b1 = $x1 * $kb - $l1;
		$b2 = $x2 * $kb - $l2;
		$b3 = $x3 * $kb - $l3;
		$b4 = $x4 * $kb - $l4;
		$b5 = $x5 * $kb - $l5;
		$b6 = $x6 * $kb - $l6;
		$b7 = $x7 * $kb - $l7;
		$b8 = $x8 * $kb - $l8;
		$b9 = $x9 * $kb - $l9;
		$b10 = $x10 * $kb - $l10;
		$b11 = $x11 * $kb - $l11;
		$b12 = $x12 * $kb - $l12;
		$sql1 = "INSERT INTO tb_money (c_id,u_user,m_wood,x1,x2,x3,x4,x5,x6,x7,x8,x9,x10,x11,x12)
		VALUES ('" . $c_id . "','" . $u_user . "','" . $m_wood . "','10','20','40','90','180','370','760','1560','3200','6570','13490','27690')";
		if ( $conn1->query( $sql1 ) === TRUE ) {
			//echo "New record created successfully";
			header('Location: frm_pk.php');
		} else {
			echo "Error: " . $sql1 . "<br>" . $conn1->error;
		}
		$conn1->close();
	}

	?>
	
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>PK10</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap -->
<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
<script>
//========== ฟังก์ชั่น เริ่มใหม่ ==========//
var c_1 = "";
var c_2 = "";
var c_3 = "";
var c_4 = "";
var c_5 = "";
var c_6 = "";
var c_7 = "";
var c_8 = "";
var c_99 = "";
var c_10 = "";
var c_11 = "";
var c_12 = "";
//เล็กใหญ่
var ac_1 = "";
var ac_2 = "";
var ac_3 = "";
var ac_4 = "";
var ac_5 = "";
var ac_6 = "";
var ac_7 = "";
var ac_8 = "";
var ac_99 = "";
var ac_10 = "";
var ac_11 = "";
var ac_12 = "";
	//4มังกรเสือ
var bc_1 = "";
var bc_2 = "";
var bc_3 = "";
var bc_4 = "";
var bc_5 = "";
var bc_6 = "";
var bc_7 = "";
var bc_8 = "";
var bc_99 = "";
var bc_10 = "";
var bc_11 = "";
var bc_12 = "";
var cp1 = "";
var num = 0;
var suma = 0;
var suma1 = 0;
var suma2 = 0;
var sumb = 0;
var wins = 0;
var tres = 0;
var losss = 0;
var vwin = 0;
var vloss = 0;
var sumwin = 0;
var showwin = 0;
var showe = "E";
var showo = "O";
var show12 = "S";
var show34 = "B";
var show41 = "D";
var show23 = "T";
var colore = "blue";
var coloro = "red";
var color12 = "#0099ff";
var color34 = "#ff6600";
var color41 = "black";
var color23 = "red";
function random(){
		suma = 0;
		sumb = 1;
	document.getElementById("coins_9").innerHTML = '<font color="green" size="5">เริ่มเล่นได้</font>';
	document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">เริ่มเล่นได้</font>';
	document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">เริ่มเล่นได้</font>';
	//แดงดำ
	document.getElementById("b1").disabled = false;	
	document.getElementById("b3").disabled = false;
	//สูงต่ำ
	document.getElementById("b11").disabled = false;	
	document.getElementById("b31").disabled = false;	
	//คู่คี่
	document.getElementById("b111").disabled = false;	
	document.getElementById("b311").disabled = false;
	document.getElementById("win").innerHTML = wins;	
	document.getElementById("loss").innerHTML = losss;
      num++;
	document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
      var coins_1 = Math.floor((Math.random() * 2) + 1);
      var coins_2 = Math.floor((Math.random() * 2) + 1);
      var coins_3 = Math.floor((Math.random() * 2) + 1);
      var coins_4 = Math.floor((Math.random() * 2) + 1);
      var coins_5 = Math.floor((Math.random() * 2) + 1);
      var coins_6 = Math.floor((Math.random() * 2) + 1);
      var coins_7 = Math.floor((Math.random() * 2) + 1);
	  var coins_8 = Math.floor((Math.random() * 2) + 1);
	var coins_99 = Math.floor((Math.random() * 2) + 1);
	var coins_10 = Math.floor((Math.random() * 2) + 1);
	var coins_11 = Math.floor((Math.random() * 2) + 1);
	var coins_12 = Math.floor((Math.random() * 2) + 1); 
      if(coins_1 == 1){
        document.getElementById("coins_1").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
		 document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+showe+'</font>';	
		  document.getElementById("showr1").innerHTML = '<font " size="3">ไม้ที่ 1 ลง '+<?php echo($x1)  ?>+' บาท</font>';
        c_1 = showe;
      }else{
       document.getElementById("coins_1").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';
		 document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+showo+'</font>';
		  document.getElementById("showr1").innerHTML = '<font size="3">ไม้ที่ 1 ลง '+<?php echo($x1)  ?>+' บาท</font>';
        c_1 = showo;
      }
      // coins_2 //
      if(coins_2 == 1){
       document.getElementById("coins_2").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_2 = showe;
      }else{
     document.getElementById("coins_2").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';
        c_2 = showo;
      }
      // coins_3 //
      if(coins_3 == 1){
       document.getElementById("coins_3").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_3 = showe;
      }else{
       document.getElementById("coins_3").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';
        c_3 = showo;
      }
      // coins_4 //
      if(coins_4 == 1){
        document.getElementById("coins_4").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_4 = showe;
      }else{
        document.getElementById("coins_4").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';
        c_4 = showo;
      }
       // coins_5 //
       if(coins_5 == 1){
        document.getElementById("coins_5").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_5 = showe;
      }else{
       document.getElementById("coins_5").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';
        c_5 = showo;
      }
       // coins_6 //
       if(coins_6 == 1){
      document.getElementById("coins_6").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_6 = showe;
      }else{
       document.getElementById("coins_6").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';
        c_6 = showo;
      }
       // coins_7 //
       if(coins_7 == 1){
       document.getElementById("coins_7").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_7 = showe;
      }else{
        document.getElementById("coins_7").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';
        c_7 = showo;
      }
	  // coins_8 //
       if(coins_8 == 1){
       document.getElementById("coins_8").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_8 = showe;
      }else{
        document.getElementById("coins_8").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';	
        c_8 = showo;
      }
	// coins_8 //
       if(coins_99 == 1){
       document.getElementById("coins_99").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_99 = showe;
      }else{
        document.getElementById("coins_99").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';	
        c_99 = showo;
      }

	// coins_8 //
       if(coins_10 == 1){
       document.getElementById("coins_10").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_10 = showe;
      }else{
        document.getElementById("coins_10").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';	
        c_10 = showo;
      }
	// coins_8 //
       if(coins_11 == 1){
       document.getElementById("coins_11").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_11 = showe;
      }else{
        document.getElementById("coins_11").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';	
        c_11 = showo;
      }
	// coins_8 //
       if(coins_12 == 1){
       document.getElementById("coins_12").innerHTML = '<font color="'+colore+'" size="3">'+showe+'</font>';	
        c_12 = showe;
      }else{
        document.getElementById("coins_12").innerHTML = '<font color="'+coloro+'" size="3">'+showo+'</font>';	
        c_12 = showo;
      }
	
//แสดง12-34
var acoins_1 = Math.floor((Math.random() * 2) + 1);
      var acoins_2 = Math.floor((Math.random() * 2) + 1);
      var acoins_3 = Math.floor((Math.random() * 2) + 1);
      var acoins_4 = Math.floor((Math.random() * 2) + 1);
      var acoins_5 = Math.floor((Math.random() * 2) + 1);
      var acoins_6 = Math.floor((Math.random() * 2) + 1);
      var acoins_7 = Math.floor((Math.random() * 2) + 1);
	  var acoins_8 = Math.floor((Math.random() * 2) + 1);
	var acoins_99 = Math.floor((Math.random() * 2) + 1);
	var acoins_10 = Math.floor((Math.random() * 2) + 1);
	var acoins_11 = Math.floor((Math.random() * 2) + 1);
	var acoins_12 = Math.floor((Math.random() * 2) + 1);
    
      if(acoins_1 == 1){
        document.getElementById("acoins_1").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
		 document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+show12+'</font>';	
		  document.getElementById("ashowr1").innerHTML = '<font " size="3">ไม้ที่ 1 ลง '+<?php echo($x1)  ?>+' บาท</font>';
        ac_1 = show12;
      }else{
       document.getElementById("acoins_1").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';
		 document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+show34+'</font>';
		  document.getElementById("ashowr1").innerHTML = '<font size="3">ไม้ที่ 1 ลง '+<?php echo($x1)  ?>+' บาท</font>';
        ac_1 = show34;
      }
      // acoins_2 //
      if(acoins_2 == 1){
       document.getElementById("acoins_2").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_2 = show12;
      }else{
     document.getElementById("acoins_2").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';
        ac_2 = show34;
      }
      // acoins_3 //
      if(acoins_3 == 1){
       document.getElementById("acoins_3").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_3 = show12;
      }else{
       document.getElementById("acoins_3").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';
        ac_3 = show34;
      }
      // acoins_4 //
      if(acoins_4 == 1){
        document.getElementById("acoins_4").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_4 = show12;
      }else{
        document.getElementById("acoins_4").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';
        ac_4 = show34;
      }
       // acoins_5 //
       if(acoins_5 == 1){
        document.getElementById("acoins_5").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_5 = show12;
      }else{
       document.getElementById("acoins_5").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';
        ac_5 = show34;
      }
       // acoins_6 //
       if(acoins_6 == 1){
      document.getElementById("acoins_6").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_6 = show12;
      }else{
       document.getElementById("acoins_6").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';
        ac_6 = show34;
      }
       // acoins_7 //
       if(acoins_7 == 1){
       document.getElementById("acoins_7").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_7 = show12;
      }else{
        document.getElementById("acoins_7").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';
        ac_7 = show34;
      }
	  // acoins_8 //
       if(acoins_8 == 1){
       document.getElementById("acoins_8").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_8 = show12;
      }else{
        document.getElementById("acoins_8").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';	
        ac_8 = show34;
      }
	// acoins_8 //
       if(acoins_99 == 1){
       document.getElementById("acoins_99").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_99 = show12;
      }else{
        document.getElementById("acoins_99").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';	
        ac_99 = show34;
      }
	// acoins_8 //
       if(acoins_10 == 1){
       document.getElementById("acoins_10").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_10 = show12;
      }else{
        document.getElementById("acoins_10").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';	
        ac_10 = show34;
      }
	// acoins_8 //
       if(acoins_11 == 1){
       document.getElementById("acoins_11").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_11 = show12;
      }else{
        document.getElementById("acoins_11").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';	
        ac_11 = show34;
      }
	// acoins_8 //
       if(acoins_12 == 1){
       document.getElementById("acoins_12").innerHTML = '<font color="'+color12+'" size="3">'+show12+'</font>';	
        ac_12 = show12;
      }else{
        document.getElementById("acoins_12").innerHTML = '<font color="'+color34+'" size="3">'+show34+'</font>';	
        ac_12 = show34;
      }

	
//แสดง4-1 และ 2-3
var bcoins_1 = Math.floor((Math.random() * 2) + 1);
      var bcoins_2 = Math.floor((Math.random() * 2) + 1);
      var bcoins_3 = Math.floor((Math.random() * 2) + 1);
      var bcoins_4 = Math.floor((Math.random() * 2) + 1);
      var bcoins_5 = Math.floor((Math.random() * 2) + 1);
      var bcoins_6 = Math.floor((Math.random() * 2) + 1);
      var bcoins_7 = Math.floor((Math.random() * 2) + 1);
	  var bcoins_8 = Math.floor((Math.random() * 2) + 1);
	var bcoins_99 = Math.floor((Math.random() * 2) + 1);
	var bcoins_10 = Math.floor((Math.random() * 2) + 1);
	var bcoins_11 = Math.floor((Math.random() * 2) + 1);
	var bcoins_12 = Math.floor((Math.random() * 2) + 1);
    
      if(bcoins_1 == 1){
        document.getElementById("bcoins_1").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
		 document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+show41+'</font>';	
		  document.getElementById("bshowr1").innerHTML = '<font " size="3">ไม้ที่ 1 ลง '+<?php echo($x1)  ?>+' บาท</font>';
        bc_1 = show41;
      }else{
       document.getElementById("bcoins_1").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';
		 document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+show23+'</font>';
		  document.getElementById("bshowr1").innerHTML = '<font size="3">ไม้ที่ 1 ลง '+<?php echo($x1)  ?>+' บาท</font>';
        bc_1 = show23;
      }
      // bcoins_2 //
      if(bcoins_2 == 1){
       document.getElementById("bcoins_2").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_2 = show41;
      }else{
     document.getElementById("bcoins_2").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';
        bc_2 = show23;
      }
      // bcoins_3 //
      if(bcoins_3 == 1){
       document.getElementById("bcoins_3").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_3 = show41;
      }else{
       document.getElementById("bcoins_3").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';
        bc_3 = show23;
      }
      // bcoins_4 //
      if(bcoins_4 == 1){
        document.getElementById("bcoins_4").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_4 = show41;
      }else{
        document.getElementById("bcoins_4").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';
        bc_4 = show23;
      }
       // bcoins_5 //
       if(bcoins_5 == 1){
        document.getElementById("bcoins_5").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_5 = show41;
      }else{
       document.getElementById("bcoins_5").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';
        bc_5 = show23;
      }
       // bcoins_6 //
       if(bcoins_6 == 1){
      document.getElementById("bcoins_6").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_6 = show41;
      }else{
       document.getElementById("bcoins_6").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';
        bc_6 = show23;
      }
       // bcoins_7 //
       if(bcoins_7 == 1){
       document.getElementById("bcoins_7").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_7 = show41;
      }else{
        document.getElementById("bcoins_7").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';
        bc_7 = show23;
      }
	  // bcoins_8 //
       if(bcoins_8 == 1){
       document.getElementById("bcoins_8").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_8 = show41;
      }else{
        document.getElementById("bcoins_8").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';	
        bc_8 = show23;
      }
	// bcoins_8 //
       if(bcoins_99 == 1){
       document.getElementById("bcoins_99").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_99 = show41;
      }else{
        document.getElementById("bcoins_99").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';	
        bc_99 = show23;
      }
	// bcoins_8 //
       if(bcoins_10 == 1){
       document.getElementById("bcoins_10").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_10 = show41;
      }else{
        document.getElementById("bcoins_10").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';	
        bc_10 = show23;
      }
	// bcoins_8 //
       if(bcoins_11 == 1){
       document.getElementById("bcoins_11").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_11 = show41;
      }else{
        document.getElementById("bcoins_11").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';	
        bc_11 = show23;
      }
	// bcoins_8 //
       if(bcoins_12 == 1){
       document.getElementById("bcoins_12").innerHTML = '<font color="'+color41+'" size="3">'+show41+'</font>';	
        bc_12 = show41;
      }else{
        document.getElementById("bcoins_12").innerHTML = '<font color="'+color23+'" size="3">'+show23+'</font>';	
        bc_12 = show23;
      }
	

     

}

function chack(cval1,cval2){
    //alert(cval1);
    //alert(cval2);
    if(cval2 == 0){
      document.getElementById("chack_"+cval1).innerHTML = '<div class=a style="background-color:green;"><img src="img/check.svg" style="max-width: 11px;"></div>';
    }else{
      document.getElementById("chack_"+cval1).innerHTML = '<div class=b style="background-color:red;"><img src="img/close.svg" style="max-width: 11px;"> คุณแพ้แล้ว</div>';
    }
suma = 0;
}

function checkt(){
	if($("div").attr("coins_9") == "ยินดีต้อนรับ")
{
    document.getElementById("modal").click();	
}
else{
		tres++;
	//document.getElementById("modal").click();
}	
		
}
//ปุ่ม e 
function checkp(){
	suma++;
	if(suma == 1){
	   //document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_1 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';
		alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
		sumb = 1;
		wins++;			
		vwin = vwin+<?php echo($p1)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			
	}
	else{
		 // coins_1 //		
      if(c_2 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_2+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_2+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่1ผิดแล้ว เริ่มต่อไปไม้ที่2</font>';	
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 2 ลง '+<?php echo($x2)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l1)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }
	}
	else if(suma == 2){
			//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_2 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 2;
		wins++;			
		vwin = vwin+<?php echo($p2)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_3 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_3+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_3+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่2ผิดแล้ว เริ่มต่อไปไม้ที่3</font>';
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 3 ลง '+<?php echo($x3)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l2)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 3){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_3 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 3;
			wins++;			
		vwin = vwin+<?php echo($p3)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_4 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_4+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_4+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่3ผิดแล้ว เริ่มต่อไปไม้ที่4</font>';	
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 4 ลง '+<?php echo($x4)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l3)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 4){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_4 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 4;
			wins++;			
		vwin = vwin+<?php echo($p4)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_5 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_5+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_5+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่4ผิดแล้ว เริ่มต่อไปไม้ที่5</font>';	
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 5 ลง '+<?php echo($x5)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l4)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 5){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_5 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 5;
			wins++;			
		vwin = vwin+<?php echo($p5)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_6 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_6+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_6+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่5ผิดแล้ว เริ่มต่อไปไม้ที่6</font>';
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 6 ลง '+<?php echo($x6)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l5)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 6){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_6 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 6;
			wins++;			
		vwin = vwin+<?php echo($p6)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_7 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_7+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_7+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่6ผิดแล้ว เริ่มต่อไปไม้ที่7</font>';
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 7 ลง '+<?php echo($x7)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l6)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 7){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_7 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 7;
			wins++;			
		vwin = vwin+<?php echo($p7)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_8 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_8+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_8+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่7ผิดแล้ว เริ่มต่อไปไม้ที่8</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 8 ลง '+<?php echo($x8)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l7)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 8){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_8 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 8;
			wins++;			
		vwin = vwin+<?php echo($p8)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_99 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_99+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_99+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่8ผิดแล้ว เริ่มต่อไปไม้ที่9</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 9 ลง '+<?php echo($x9)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l8)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 9){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_99 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 9;
			wins++;			
		vwin = vwin+<?php echo($p9)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_10 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_10+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_10+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่9ผิดแล้ว เริ่มต่อไปไม้ที่10</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 10 ลง '+<?php echo($x10)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l9)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 10){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_10 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 10;
			wins++;			
		vwin = vwin+<?php echo($p10)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_11 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_11+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_11+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่10ผิดแล้ว เริ่มต่อไปไม้ที่11</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 11 ลง '+<?php echo($x11)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l10)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 11){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_11 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 11;
			wins++;			
		vwin = vwin+<?php echo($p11)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_12 == showe){
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_12+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_12+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่11ผิดแล้ว เริ่มต่อไปไม้ที่12</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 12 ลง '+<?php echo($x12)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l11)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 12){
				//document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
		if(c_12 == showe){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 12;
			wins++;			
		vwin = vwin+<?php echo($p12)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{		
		document.getElementById("coins_9").innerHTML = '<font  size="5">เสียใจด้วยคุณแพ้ 12 ไม้แล้ว</font>';			
		document.getElementById("showr1").innerHTML = '<font  size="5">TvT</font>';losss++;
		vloss = vloss+<?php echo($l12)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			suma = 0;
			}
	//document.getElementById("showr1").innerHTML = '<font color="'+colore+'" size="7">'+suma+'</font>';
	
	
}
//ปุ่ม o 
function checkb(){
	suma++;
	if(suma == 1){
	   //document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_1 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';
		alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
		sumb = 1;
		wins++;
		vwin = vwin+<?php echo($b1)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			
	}
	else{
		 // coins_1 //		
      if(c_2 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_2+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_2+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่1ผิดแล้ว เริ่มต่อไปไม้ที่2</font>';	
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 2 ลง '+<?php echo($x2)  ?>+' บาท</font>';
	vloss = vloss+<?php echo($l1)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }
	}
	else if(suma == 2){
			//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_2 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 2;
			wins++;
		vwin = vwin+<?php echo($b2)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_3 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_3+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_3+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่2ผิดแล้ว เริ่มต่อไปไม้ที่3</font>';
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 3 ลง '+<?php echo($x3)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l2)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 3){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_3 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 3;
			wins++;
		vwin = vwin+<?php echo($b3)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_4 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_4+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_4+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่3ผิดแล้ว เริ่มต่อไปไม้ที่4</font>';	
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 4 ลง '+<?php echo($x4)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l3)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 4){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_4 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 4;
			wins++;
		vwin = vwin+<?php echo($b4)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();			
			}
	else{
		 // coins_1 //		
      if(c_5 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_5+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_5+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่4ผิดแล้ว เริ่มต่อไปไม้ที่5</font>';	
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 5 ลง '+<?php echo($x5)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l4)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 5){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_5 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 5;
			wins++;
		vwin = vwin+<?php echo($b5)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_6 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_6+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_6+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่5ผิดแล้ว เริ่มต่อไปไม้ที่6</font>';
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 6 ลง '+<?php echo($x6)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l5)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 6){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_6 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 6;
			wins++;
		vwin = vwin+<?php echo($b6)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_7 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_7+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_7+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่6ผิดแล้ว เริ่มต่อไปไม้ที่7</font>';
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 7 ลง '+<?php echo($x7)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l6)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 7){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_7 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 7;
			wins++;
		vwin = vwin+<?php echo($b7)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_8 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_8+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_8+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่7ผิดแล้ว เริ่มต่อไปไม้ที่8</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 8 ลง '+<?php echo($x8)  ?>+' บาท</font>';losss++;
	vloss = vloss+<?php echo($l7)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 8){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_8 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 8;
			wins++;
		vwin = vwin+<?php echo($b8)?>;
		sumwin = vwin-vloss; 

		document.getElementById("modal").click();		
			}
	else{
		 // coins_1 //		
      if(c_99 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_99+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_99+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่8ผิดแล้ว เริ่มต่อไปไม้ที่9</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 9 ลง '+<?php echo($x9)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l8)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 9){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_99 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 9;
			wins++;
		vwin = vwin+<?php echo($b9)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_10 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_10+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_10+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่9ผิดแล้ว เริ่มต่อไปไม้ที่10</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 10 ลง '+<?php echo($x10)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l9)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 10){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_10 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 10;
			wins++;
		vwin = vwin+<?php echo($b10)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_11 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_11+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_11+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่10ผิดแล้ว เริ่มต่อไปไม้ที่11</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 11 ลง '+<?php echo($x11)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l10)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 11){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_11 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 11;
			wins++;
		vwin = vwin+<?php echo($b11)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
		 // coins_1 //		
      if(c_12 == showo){
        document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+c_12+'</font>';		 
        
      }else{
        document.getElementById("showr").innerHTML = '<font color="'+colore+'" size="7">'+c_12+'</font>';       
      }
		document.getElementById("coins_9").innerHTML = '<font  size="5">ไม้ที่11ผิดแล้ว เริ่มต่อไปไม้ที่12</font>';		
		document.getElementById("showr1").innerHTML = '<font  size="3">ไม้ที่ 12 ลง '+<?php echo($x12)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l11)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma == 12){
				//document.getElementById("showr").innerHTML = '<font color="'+coloro+'" size="7">'+suma+'</font>';
		if(c_12 == showo){
		document.getElementById("coins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma = 0;
			sumb = 12;
			wins++;
		vwin = vwin+<?php echo($b12)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{		
		document.getElementById("coins_9").innerHTML = '<font  size="5">เสียใจด้วยคุณแพ้ 12 ไม้แล้ว</font>';			
		document.getElementById("showr1").innerHTML = '<font  size="5">TvT</font>';losss++;
		vloss = vloss+<?php echo($l12)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			suma = 0;
			}
}	
//ปุ่ม 1-2 
function acheckp(){
	suma1++;
	if(suma1 == 1){
		if(ac_1 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';
		alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
		sumb = 1;
			wins++;			
		vwin = vwin+<?php echo($p1)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
	}
	else{
      if(ac_2 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_2+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_2+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่1ผิดแล้ว เริ่มต่อไปไม้ที่2</font>';	
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 2 ลง '+<?php echo($x2)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l1)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }
	}
	else if(suma1 == 2){
		if(ac_2 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 2;
			wins++;			
		vwin = vwin+<?php echo($p2)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_3 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_3+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_3+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่2ผิดแล้ว เริ่มต่อไปไม้ที่3</font>';
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 3 ลง '+<?php echo($x3)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l2)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 3){
		if(ac_3 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 3;
			wins++;			
		vwin = vwin+<?php echo($p3)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_4 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_4+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_4+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่3ผิดแล้ว เริ่มต่อไปไม้ที่4</font>';	
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 4 ลง '+<?php echo($x4)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l3)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 4){
		if(ac_4 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 4;
						
			wins++;			
		vwin = vwin+<?php echo($p4)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();			
			}
	else{
      if(ac_5 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_5+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_5+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่4ผิดแล้ว เริ่มต่อไปไม้ที่5</font>';	
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 5 ลง '+<?php echo($x5)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l4)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 5){
		if(ac_5 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 5;
				wins++;			
		vwin = vwin+<?php echo($p5)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(ac_6 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_6+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_6+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่5ผิดแล้ว เริ่มต่อไปไม้ที่6</font>';
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 6 ลง '+<?php echo($x6)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l5)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 6){
		if(ac_6 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 6;
			wins++;			
		vwin = vwin+<?php echo($p6)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();
			}
	else{
      if(ac_7 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_7+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_7+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่6ผิดแล้ว เริ่มต่อไปไม้ที่7</font>';
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 7 ลง '+<?php echo($x7)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l6)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 7){
		if(ac_7 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 7;
				wins++;			
		vwin = vwin+<?php echo($p7)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_8 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_8+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_8+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่7ผิดแล้ว เริ่มต่อไปไม้ที่8</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 8 ลง '+<?php echo($x8)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l7)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 8){
		if(ac_8 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 8;
				wins++;			
		vwin = vwin+<?php echo($p8)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_99 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_99+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_99+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่8ผิดแล้ว เริ่มต่อไปไม้ที่9</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 9 ลง '+<?php echo($x9)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l8)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 9){
		if(ac_99 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 9;
				wins++;			
		vwin = vwin+<?php echo($p9)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_10 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_10+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_10+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่9ผิดแล้ว เริ่มต่อไปไม้ที่10</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 10 ลง '+<?php echo($x10)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l9)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 10){
		if(ac_10 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 10;
			wins++;			
		vwin = vwin+<?php echo($p10)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_11 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_11+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_11+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่10ผิดแล้ว เริ่มต่อไปไม้ที่11</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 11 ลง '+<?php echo($x11)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l10)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 11){
		if(ac_11 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 11;
					wins++;			
		vwin = vwin+<?php echo($p11)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(ac_12 == show12){
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_12+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_12+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่11ผิดแล้ว เริ่มต่อไปไม้ที่12</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 12 ลง '+<?php echo($x12)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l11)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 12){
		if(ac_12 == show12){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 12;
				wins++;			
		vwin = vwin+<?php echo($p12)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{		
		document.getElementById("acoins_9").innerHTML = '<font color="'+color34+'" size="5">เสียใจด้วยคุณแพ้ 12 ไม้แล้ว</font>';			
		document.getElementById("ashowr1").innerHTML = '<font  size="5">TvT</font>';losss++;
		vloss = vloss+<?php echo($l12)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			suma1 = 0;
			}
}
//ปุ่ม3-4
function acheckb(){
	suma1++;
	if(suma1 == 1){
		if(ac_1 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';
		alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
		sumb = 1;
		wins++;
		vwin = vwin+<?php echo($b1)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
	}
	else{
      if(ac_2 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_2+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_2+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่1ผิดแล้ว เริ่มต่อไปไม้ที่2</font>';	
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 2 ลง '+<?php echo($x2)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l1)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }
	}
	else if(suma1 == 2){
		if(ac_2 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 2;
			wins++;
		vwin = vwin+<?php echo($b2)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_3 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_3+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_3+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่2ผิดแล้ว เริ่มต่อไปไม้ที่3</font>';
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 3 ลง '+<?php echo($x3)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l2)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 3){
		if(ac_3 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 3;
			wins++;
		vwin = vwin+<?php echo($b3)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(ac_4 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_4+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_4+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่3ผิดแล้ว เริ่มต่อไปไม้ที่4</font>';	
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 4 ลง '+<?php echo($x4)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l3)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 4){
		if(ac_4 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 4;
			wins++;
		vwin = vwin+<?php echo($b4)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();			
			}
	else{
      if(ac_5 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_5+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_5+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่4ผิดแล้ว เริ่มต่อไปไม้ที่5</font>';	
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 5 ลง '+<?php echo($x5)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l4)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 5){

		if(ac_5 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 5;
			wins++;
		vwin = vwin+<?php echo($b5)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(ac_6 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_6+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_6+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่5ผิดแล้ว เริ่มต่อไปไม้ที่6</font>';
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 6 ลง '+<?php echo($x6)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l5)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 6){
		if(ac_6 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 6;
			wins++;
		vwin = vwin+<?php echo($b6)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_7 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_7+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_7+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่6ผิดแล้ว เริ่มต่อไปไม้ที่7</font>';
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 7 ลง '+<?php echo($x7)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l6)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 7){
		if(ac_7 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 7;
			wins++;
		vwin = vwin+<?php echo($b7)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_8 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_8+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_8+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่7ผิดแล้ว เริ่มต่อไปไม้ที่8</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 8 ลง '+<?php echo($x8)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l7)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 8){
		if(ac_8 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 8;
			wins++;
		vwin = vwin+<?php echo($b2)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(ac_99 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_99+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_99+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่8ผิดแล้ว เริ่มต่อไปไม้ที่9</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 9 ลง '+<?php echo($x9)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l8)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 9){
		if(ac_99 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 9;
			wins++;
		vwin = vwin+<?php echo($b9)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(ac_10 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_10+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_10+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่9ผิดแล้ว เริ่มต่อไปไม้ที่10</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 10 ลง '+<?php echo($x10)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l9)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 10){
		if(ac_10 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 10;
			wins++;
		vwin = vwin+<?php echo($b10)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_11 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_11+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_11+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่10ผิดแล้ว เริ่มต่อไปไม้ที่11</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 11 ลง '+<?php echo($x11)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l10)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 11){
		if(ac_11 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 11;
			wins++;
		vwin = vwin+<?php echo($b11)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(ac_12 == show34){
        document.getElementById("ashowr").innerHTML = '<font color="'+color34+'" size="7">'+ac_12+'</font>';		 
      }else{
        document.getElementById("ashowr").innerHTML = '<font color="'+color12+'" size="7">'+ac_12+'</font>';       
      }
		document.getElementById("acoins_9").innerHTML = '<font  size="5">ไม้ที่11ผิดแล้ว เริ่มต่อไปไม้ที่12</font>';		
		document.getElementById("ashowr1").innerHTML = '<font  size="3">ไม้ที่ 12 ลง '+<?php echo($x12)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l11)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma1 == 12){
		if(ac_12 == show34){
		document.getElementById("acoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma1 = 0;
			sumb = 12;
			wins++;
		vwin = vwin+<?php echo($b12)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{		
		document.getElementById("acoins_9").innerHTML = '<font  size="5">เสียใจด้วยคุณแพ้ 12 ไม้แล้ว</font>';			
		document.getElementById("ashowr1").innerHTML = '<font  size="5">TvT</font>';losss++;
		vloss = vloss+<?php echo($l12)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			suma1 = 0;
			}
}
	//ปุ่ม4-1
function bcheckp(){
	suma2++;
	if(suma2 == 1){
		if(bc_1 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';
		alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
		sumb = 1;
			wins++;			
		vwin = vwin+<?php echo($p1)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
	}
	else{
      if(bc_2 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_2+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_2+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่1ผิดแล้ว เริ่มต่อไปไม้ที่2</font>';	
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 2 ลง '+<?php echo($x2)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l1)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }
	}
	else if(suma2 == 2){
		if(bc_2 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 2;
			wins++;			
		vwin = vwin+<?php echo($p2)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_3 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_3+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_3+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่2ผิดแล้ว เริ่มต่อไปไม้ที่3</font>';
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 3 ลง '+<?php echo($x3)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l2)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 3){
		if(bc_3 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 3;
				wins++;			
		vwin = vwin+<?php echo($p3)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_4 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_4+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_4+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่3ผิดแล้ว เริ่มต่อไปไม้ที่4</font>';	
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 4 ลง '+<?php echo($x4)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l3)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 4){
		if(bc_4 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 4;
				wins++;			
		vwin = vwin+<?php echo($p4)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_5 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_5+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_5+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่4ผิดแล้ว เริ่มต่อไปไม้ที่5</font>';	
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 5 ลง '+<?php echo($x5)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l4)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 5){
		if(bc_5 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 5;
				wins++;			
		vwin = vwin+<?php echo($p5)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_6 == show41){

        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_6+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_6+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่5ผิดแล้ว เริ่มต่อไปไม้ที่6</font>';
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 6 ลง '+<?php echo($x6)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l5)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 6){
		if(bc_6 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 6;
			wins++;			
		vwin = vwin+<?php echo($p6)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(bc_7 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_7+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_7+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่6ผิดแล้ว เริ่มต่อไปไม้ที่7</font>';
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 7 ลง '+<?php echo($x7)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l6)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 7){
		if(bc_7 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 7;
			wins++;			
		vwin = vwin+<?php echo($p7)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_8 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_8+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_8+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่7ผิดแล้ว เริ่มต่อไปไม้ที่8</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 8 ลง '+<?php echo($x8)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l7)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 8){
		if(bc_8 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 8;
				wins++;			
		vwin = vwin+<?php echo($p8)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_99 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_99+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_99+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่8ผิดแล้ว เริ่มต่อไปไม้ที่9</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 9 ลง '+<?php echo($x9)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l8)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 9){
		if(bc_99 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 9;
				wins++;			
		vwin = vwin+<?php echo($p9)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_10 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_10+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_10+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่9ผิดแล้ว เริ่มต่อไปไม้ที่10</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 10 ลง '+<?php echo($x10)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l9)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 10){
		if(bc_10 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 10;
				wins++;			
		vwin = vwin+<?php echo($p10)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_11 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_11+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_11+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่10ผิดแล้ว เริ่มต่อไปไม้ที่11</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 11 ลง '+<?php echo($x11)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l10)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 11){
		if(bc_11 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 11;
				wins++;			
		vwin = vwin+<?php echo($p11)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_12 == show41){
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_12+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_12+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่11ผิดแล้ว เริ่มต่อไปไม้ที่12</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 12 ลง '+<?php echo($x12)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l11)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 12){
		if(bc_12 == show41){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 12;
				wins++;			
		vwin = vwin+<?php echo($p12)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{		
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">เสียใจด้วยคุณแพ้ 12 ไม้แล้ว</font>';			
		document.getElementById("bshowr1").innerHTML = '<font  size="5">TvT</font>';losss++;
		vloss = vloss+<?php echo($l12)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			suma2 = 0;
			}
}	  
//ปุ่ม 2-3
function bcheckb(){
	suma2++;
	if(suma2 == 1){
		if(bc_1 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';
		alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
		sumb = 1;
		wins++;
		vwin = vwin+<?php echo($b1)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
	}
	else{
      if(bc_2 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_2+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_2+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่1ผิดแล้ว เริ่มต่อไปไม้ที่2</font>';	
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 2 ลง '+<?php echo($x2)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l1)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }
	}
	else if(suma2 == 2){
		if(bc_2 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 2;
			wins++;
		vwin = vwin+<?php echo($b2)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_3 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_3+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_3+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่2ผิดแล้ว เริ่มต่อไปไม้ที่3</font>';
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 3 ลง '+<?php echo($x3)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l2)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 3){
		if(bc_3 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 3;
		wins++;
		vwin = vwin+<?php echo($b3)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_4 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_4+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_4+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่3ผิดแล้ว เริ่มต่อไปไม้ที่4</font>';	
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 4 ลง '+<?php echo($x4)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l3)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 4){
		if(bc_4 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 4;
			wins++;
		vwin = vwin+<?php echo($b4)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(bc_5 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_5+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_5+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่4ผิดแล้ว เริ่มต่อไปไม้ที่5</font>';	
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 5 ลง '+<?php echo($x5)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l4)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 5){
		if(bc_5 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 5;
			wins++;
		vwin = vwin+<?php echo($b5)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_6 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_6+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_6+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่5ผิดแล้ว เริ่มต่อไปไม้ที่6</font>';
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 6 ลง '+<?php echo($x6)  ?>+' บาท</font>';
		vloss = vloss+<?php echo($l5)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 6){
		if(bc_6 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 6;
			wins++;
		vwin = vwin+<?php echo($b6)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{
      if(bc_7 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_7+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_7+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่6ผิดแล้ว เริ่มต่อไปไม้ที่7</font>';
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 7 ลง '+<?php echo($x7)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l6)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 7){
		if(bc_7 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 7;
		wins++;
		vwin = vwin+<?php echo($b7)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_8 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_8+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_8+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่7ผิดแล้ว เริ่มต่อไปไม้ที่8</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 8 ลง '+<?php echo($x8)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l7)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 8){
		if(bc_8 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 8;
			wins++;
		vwin = vwin+<?php echo($b8)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_99 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_99+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_99+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่8ผิดแล้ว เริ่มต่อไปไม้ที่9</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 9 ลง '+<?php echo($x9)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l8)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 9){
		if(bc_99 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 9;
			wins++;
		vwin = vwin+<?php echo($b9)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_10 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_10+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_10+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่9ผิดแล้ว เริ่มต่อไปไม้ที่10</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 10 ลง '+<?php echo($x10)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l9)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 10){
		if(bc_10 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 10;
		wins++;
		vwin = vwin+<?php echo($b10)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_11 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_11+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_11+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่10ผิดแล้ว เริ่มต่อไปไม้ที่11</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 11 ลง '+<?php echo($x11)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l10)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 11){
		if(bc_11 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 11;
		wins++;
		vwin = vwin+<?php echo($b11)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();	
			}
	else{
      if(bc_12 == show23){
        document.getElementById("bshowr").innerHTML = '<font color="'+color23+'" size="7">'+bc_12+'</font>';		 
      }else{
        document.getElementById("bshowr").innerHTML = '<font color="'+color41+'" size="7">'+bc_12+'</font>';       
      }
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">ไม้ที่11ผิดแล้ว เริ่มต่อไปไม้ที่12</font>';		
		document.getElementById("bshowr1").innerHTML = '<font  size="3">ไม้ที่ 12 ลง '+<?php echo($x12)  ?>+' บาท</font>';losss++;
		vloss = vloss+<?php echo($l11)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			}
	else if(suma2 == 12){
		if(bc_12 == show23){
		document.getElementById("bcoins_9").innerHTML = '<font color="green" size="5">ยินดีด้วยคุณชนะ</font>';alert("ยินดีด้วยคุณชนะ!");	
		suma2 = 0;
			sumb = 12;
			wins++;
		vwin = vwin+<?php echo($b12)?>;
		sumwin = vwin-vloss; 
		document.getElementById("modal").click();		
			}
	else{		
		document.getElementById("bcoins_9").innerHTML = '<font  size="5">เสียใจด้วยคุณแพ้ 12 ไม้แล้ว</font>';			
		document.getElementById("bshowr1").innerHTML = '<font  size="5">TvT</font>';losss++;
		vloss = vloss+<?php echo($l12)?>;
		sumwin = vwin-vloss;
		document.getElementById("showwin1").innerHTML = '<font>'+sumwin+' บาท</font>';
		vloss = 0;
	  }	
			suma2 = 0;
			}
}
	   
</script>
</head>
<body>
<div class="container mt-2">
<div class="row">
  <div class="col-12">
    <div class="row justify-content-center">
      <input type="button" id="modal" value="- สุ่มแพทเทิ้ล - กลับค่าเริ่มต้นกดปุ่มหน้าแรก -" class="btn btn-success btn-sm" onclick="random()">
    </div>
    <nav>
      <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist"> <a class="nav-item nav-link active text-dark bg-warning" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">คู่-คี่</a> <a class="nav-item nav-link text-dark bg-warning" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">เล็ก-ใหญ่</a> <a class="nav-item nav-link text-dark bg-warning" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">มังกร-เสือ</a> </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <h1 class="text-center" id="showr1">PK10</h1>
        <table class="table table-secondary">
        <tr>
      <td><h1 class="text-center" id="showr" >กรุณากดคำสั่งสุ่มแพทเทิ้ลเพื่อเริ่มเล่น!!!</h1></td>
    </tr>      
		  </table>  
        <div class="row justify-content-center">
          <div id="coins_1" style="float: left;color: black" class="img_txt text-center">*</div>
          <div id="coins_2" style="float: left;color: black" class="img_txt text-center">เ</div>
          <div id="coins_3" style="float: left;color: black" class="img_txt text-center">ริ่</div>
          <div id="coins_4" style="float: left;color: black" class="img_txt text-center">ม</div>
          <div id="coins_5" style="float: left;color: black" class="img_txt text-center">สุ่</div>
          <div id="coins_6" style="float: left;color: black" class="img_txt text-center">ม</div>
          <div id="coins_7" style="float: left;color: black" class="img_txt text-center">ไ</div>
          <div id="coins_8" style="float: left;color: black" class="img_txt text-center">ด้</div>
          <div id="coins_99" style="float: left;color: black" class="img_txt text-center">เ</div>
          <div id="coins_10" style="float: left;color: black" class="img_txt text-center">ล</div>
          <div id="coins_11" style="float: left;color: black" class="img_txt text-center">ย</div>
          <div id="coins_12" style="float: left;color: black" class="img_txt text-center">!</div>
        </div>
        <div class="row justify-content-center">
          <div id="coins_9" style="float: left;color: red" class="img_txt text-center">ยินดีต้อนรับ</div>
        </div>
        <div class="row justify-content-center">
          <input id="b1" disabled type="button" value="   E=คู่   " class="btn btn-primary btn-lg" onclick="checkp()">
          &nbsp;&nbsp;&nbsp;
          <input  id="b3" disabled  type="button" value=" O=คี่ " class="btn btn-danger  btn-lg" onclick="checkb()">
        </div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <h1 class="text-center" id="ashowr1">PK10</h1>
        <table class="table table-secondary">
        <tr>
      <td><h1 class="text-center" id="ashowr" >กรุณากดคำสั่งสุ่มแพทเทิ้ลเพื่อเริ่มเล่น!!!</h1></td>
    </tr>      
		  </table>  
        <div class="row justify-content-center">
          <div id="acoins_1" style="float: left;color: black" class="img_txt text-center">*</div>
          <div id="acoins_2" style="float: left;color: black" class="img_txt text-center">เ</div>
          <div id="acoins_3" style="float: left;color: black" class="img_txt text-center">ริ่</div>
          <div id="acoins_4" style="float: left;color: black" class="img_txt text-center">ม</div>
          <div id="acoins_5" style="float: left;color: black" class="img_txt text-center">สุ่</div>
          <div id="acoins_6" style="float: left;color: black" class="img_txt text-center">ม</div>
          <div id="acoins_7" style="float: left;color: black" class="img_txt text-center">ไ</div>
          <div id="acoins_8" style="float: left;color: black" class="img_txt text-center">ด้</div>
          <div id="acoins_99" style="float: left;color: black" class="img_txt text-center">เ</div>
          <div id="acoins_10" style="float: left;color: black" class="img_txt text-center">ล</div>
          <div id="acoins_11" style="float: left;color: black" class="img_txt text-center">ย</div>
          <div id="acoins_12" style="float: left;color: black" class="img_txt text-center">!</div>
        </div>
        <div class="row justify-content-center">
          <div id="acoins_9" style="float: left;color: red" class="img_txt text-center">ยินดีต้อนรับ</div>
        </div>
        <div class="row justify-content-center">
          <input id="b11" disabled type="button" value="   S=เล็ก   " class="btn btn-info btn-lg" onclick="acheckp()">
          &nbsp;&nbsp;&nbsp;
          <input id="b31" disabled type="button" value=" B=ใหญ่ " class="btn btn-warning  btn-lg" onclick="acheckb()">
        </div>
      </div>
      <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
        <h1 class="text-center" id="bshowr1">PK10</h1>
         <table class="table table-secondary">
        <tr>
      <td><h1 class="text-center" id="bshowr" >กรุณากดคำสั่งสุ่มแพทเทิ้ลเพื่อเริ่มเล่น!!!</h1></td>
    </tr>      
		  </table>          
        <div class="row justify-content-center">
          <div id="bcoins_1" style="float: left;color: black" class="img_txt text-center">*</div>
          <div id="bcoins_2" style="float: left;color: black" class="img_txt text-center">เ</div>
          <div id="bcoins_3" style="float: left;color: black" class="img_txt text-center">ริ่</div>
          <div id="bcoins_4" style="float: left;color: black" class="img_txt text-center">ม</div>
          <div id="bcoins_5" style="float: left;color: black" class="img_txt text-center">สุ่</div>
          <div id="bcoins_6" style="float: left;color: black" class="img_txt text-center">ม</div>
          <div id="bcoins_7" style="float: left;color: black" class="img_txt text-center">ไ</div>
          <div id="bcoins_8" style="float: left;color: black" class="img_txt text-center">ด้</div>
          <div id="bcoins_99" style="float: left;color: black" class="img_txt text-center">เ</div>
          <div id="bcoins_10" style="float: left;color: black" class="img_txt text-center">ล</div>
          <div id="bcoins_11" style="float: left;color: black" class="img_txt text-center">ย</div>
          <div id="bcoins_12" style="float: left;color: black" class="img_txt text-center">!</div>
        </div>
        <div class="row justify-content-center">
          <div id="bcoins_9" style="float: left;color: red" class="img_txt text-center">ยินดีต้อนรับ</div>
        </div>
        <div class="row justify-content-center">
          <input id="b111" disabled type="button" value="   D=มังกร   " class="btn btn-dark btn-lg" onclick="bcheckp()">
          &nbsp;&nbsp;&nbsp;
          <input id="b311" disabled type="button" value=" T=เสือ " class="btn btn-danger  btn-lg" onclick="bcheckb()">
        </div>
      </div>
      <div class="">
        
        <table class="table" >
          <thead>
            <tr align="center">
              <th >ชนะ(ครั้ง)</th>
              <th >แพ้ไม้ 7-12 (ครั้ง)</th>
            </tr>
          </thead>
          <tbody>
            <tr align="center">
              <td ><button type="button" id="win" class="btn btn-success">0</button></td>
              <td ><button type="button" id="loss" class="btn btn-danger">0</button></td>
            </tr>
          </tbody>
        </table>
                <table class="table table-sm" >
        <thead>
          <tr align="center">
            <th >ต้นทุน</th>
            <th >กำไร</th>
          </tr>
        </thead>
        <tbody>
          <tr align="center">
            <td ><button type="button" id="oksum1" class="btn btn-warning btn-sm"><?php echo $l12 ?> บาท</button></td>
            <td >
            
            <button type="button" id="showwin1" class="btn btn-info btn-sm">0 บาท</button>
            </td>
          </tr>
        </tbody>
      </table>      
        
	<form id="form1" name="form1" method="get" action="edit_pk.php">		
			<font class="font-weight-bold" type="text" >ตารางเดินเงิน</font>			
			<input readonly class="btn btn-info btn-sm"  size="1" id="m_id" name="m_id"   value="<?php echo $m_id ?>"/>
		<table class="table table-sm">
			<thead class="thead-dark">
				<tr>
					<th scope="col">ไม้</th>
					<th scope="col">ทุน</th>
					<th scope="col">ขาดทุน</th>
					<th scope="col">กำไร A</th>
					<th scope="col">กำไร B</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td><input name="x1" type="text" id="x1" value="<?php echo $x1 ?>" size="3">
					</td>
					<td><input name="l1" type="text" disabled="disabled" id="l1" value="<?php echo $l1 ?>" size="3">
					</td>
					<td><input name="p1" type="text" disabled="disabled" id="p1" value="<?php echo $p1 ?>" size="3">
					</td>
					<td><input name="b1" type="text" disabled="disabled" id="b1" value="<?php echo $b1 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td><input name="x2" type="text" id="x2" value="<?php echo $x2?>" size="3">
					</td>
					<td><input name="l2" type="text" disabled="disabled" id="l2" value="<?php echo $l2 ?>" size="3">
					</td>
					<td><input name="p2" type="text" disabled="disabled" id="p2" value="<?php echo $p2 ?>" size="3">
					</td>
					<td><input name="b2" type="text" disabled="disabled" id="b2" value="<?php echo $b2 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td><input name="x3" type="text" id="x3" value="<?php echo $x3?>" size="3">
					</td>
					<td><input name="l3" type="text" disabled="disabled" id="l3" value="<?php echo $l3 ?>" size="3">
					</td>
					<td><input name="p3" type="text" disabled="disabled" id="p3" value="<?php echo $p3 ?>" size="3">
					</td>
					<td><input name="b3" type="text" disabled="disabled" id="b3" value="<?php echo $b3 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">4</th>
					<td><input name="x4" type="text" id="x4" value="<?php echo $x4?>" size="3">
					</td>
					<td><input name="l4" type="text" disabled="disabled" id="l4" value="<?php echo $l4 ?>" size="3">
					</td>
					<td><input name="p4" type="text" disabled="disabled" id="p4" value="<?php echo $p4 ?>" size="3">
					</td>
					<td><input name="b4" type="text" disabled="disabled" id="b4" value="<?php echo $b4 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">5</th>
					<td><input name="x5" type="text" id="x5" value="<?php echo $x5?>" size="3">
					</td>
					<td><input name="l5" type="text" disabled="disabled" id="l5" value="<?php echo $l5 ?>" size="3">
					</td>
					<td><input name="p5" type="text" disabled="disabled" id="p5" value="<?php echo $p5 ?>" size="3">
					</td>
					<td><input name="b5" type="text" disabled="disabled" id="b5" value="<?php echo $b5 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">6</th>
					<td><input name="x6" type="text" id="x6" value="<?php echo $x6?>" size="3">
					</td>
					<td><input name="l6" type="text" disabled="disabled" id="l6" value="<?php echo $l6 ?>" size="3">
					</td>
					<td><input name="p6" type="text" disabled="disabled" id="p6" value="<?php echo $p6 ?>" size="3">
					</td>
					<td><input name="b6" type="text" disabled="disabled" id="b6" value="<?php echo $b6 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">7</th>
					<td><input name="x7" type="text" id="x7" value="<?php echo $x7?>" size="3">
					</td>
					<td><input name="l7" type="text" disabled="disabled" id="l7" value="<?php echo $l7 ?>" size="3">
					</td>
					<td><input name="p7" type="text" disabled="disabled" id="p7" value="<?php echo $p7 ?>" size="3">
					</td>
					<td><input name="b7" type="text" disabled="disabled" id="b7" value="<?php echo $b7 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">8</th>
					<td><input name="x8" type="text" id="x8" value="<?php echo $x8?>" size="3">
					</td>
					<td><input name="l8" type="text" disabled="disabled" id="l8" value="<?php echo $l8 ?>" size="3">
					</td>
					<td><input name="p8" type="text" disabled="disabled" id="p8" value="<?php echo $p8 ?>" size="3">
					</td>
					<td><input name="b8" type="text" disabled="disabled" id="b8" value="<?php echo $b8 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">9</th>
					<td><input name="x9" type="text" id="x9" value="<?php echo $x9?>" size="3">
					</td>
					<td><input name="l9" type="text" disabled="disabled" id="l9" value="<?php echo $l9 ?>" size="3">
					</td>
					<td><input name="p9" type="text" disabled="disabled" id="p9" value="<?php echo $p9 ?>" size="3">
					</td>
					<td><input name="b9" type="text" disabled="disabled" id="b9" value="<?php echo $b9 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">10</th>
					<td><input name="x10" type="text" id="x10" value="<?php echo $x10?>" size="3">
					</td>
					<td><input name="l10" type="text" disabled="disabled" id="l10" value="<?php echo $l10 ?>" size="3">
					</td>
					<td><input name="p10" type="text" disabled="disabled" id="p10" value="<?php echo $p10 ?>" size="3">
					</td>
					<td><input name="b10" type="text" disabled="disabled" id="b10" value="<?php echo $b10 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">11</th>
					<td><input name="x11" type="text" id="x11" value="<?php echo $x11?>" size="3">
					</td>
					<td><input name="l11" type="text" disabled="disabled" id="l11" value="<?php echo $l11 ?>" size="3">
					</td>
					<td><input name="p11" type="text" disabled="disabled" id="p11" value="<?php echo $p11 ?>" size="3">
					</td>
					<td><input name="b11" type="text" disabled="disabled" id="b11" value="<?php echo $b11 ?>" size="3">
					</td>
				</tr>
				<tr>
					<th scope="row">12</th>
					<td><input name="x12" type="text" id="x12" value="<?php echo $x12?>" size="3">
					</td>
					<td><input name="l12" type="text" disabled="disabled" id="l12" value="<?php echo $l12 ?>" size="3">
					</td>
					<td><input name="p12" type="text" disabled="disabled" id="p12" value="<?php echo $p12 ?>" size="3">
					</td>
					<td><input name="b12" type="text" disabled="disabled" id="b12" value="<?php echo $b12 ?>" size="3">
					</td>
				</tr>
			</tbody>
		</table>
		<p align="center">		
			<input class="btn btn-success btn-sm"  type="submit" value="คำนวณตารางเดินเงิน"/>
		</p>
	</form>
      <p class="font-weight-bold">&nbsp;</p>
       <!--<img src="images/bg.png" class="img-fluid" alt="Responsive image"> </div>-->
    </div>
  </div>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.3.1.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.3.1.js"></script> 
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
		modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
		modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
		if (event.target == modal) {
				modal.style.display = "none";
		}
}
</script>
</body>
<?php include 'footer.php';?>
</html>