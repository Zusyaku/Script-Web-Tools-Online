<?php 
if (isset($_POST['gethash'])) {
	$hash = $_POST['hash'];
	if (strlen($hash) == 32) {
	$hashresult = "MD5 Hash";
	} elseif (strlen($hash) == 40) {
	$hashresult = "SHA-1 Hash/ /MySQL5 Hash";
	} elseif (strlen($hash) == 13) {
	$hashresult = "DES(Unix) Hash";
	} elseif (strlen($hash) == 16) {
	$hashresult = "MySQL Hash / /DES(Oracle Hash)";
	} elseif (strlen($hash) == 41) {
	$GetHashChar = substr($hash, 40);
	if ($GetHashChar == "*") {
	$hashresult = "MySQL5 Hash";
	}
	} elseif (strlen($hash) == 64) {
	$hashresult = "SHA-256 Hash";
	} elseif (strlen($hash) == 96) {
	$hashresult = "SHA-384 Hash";
	} elseif (strlen($hash) == 128) {
	$hashresult = "SHA-512 Hash";
	} elseif (strlen($hash) == 34) {
	if (strstr($hash, '$1$')) {
	$hashresult = "MD5(Unix) Hash";
	}
	} elseif (strlen($hash) == 37) {
	if (strstr($hash, '$apr1$')) {
	$hashresult = "MD5(APR) Hash";
	}
	} elseif (strlen($hash) == 34) {
	if (strstr($hash, '$H$')) {
	$hashresult = "MD5(phpBB3) Hash";
	}
	} elseif (strlen($hash) == 34) {
	if (strstr($hash, '$P$')) {
	$hashresult = "MD5(WordPress) Hash";
	}
	} elseif (strlen($hash) == 39) {
	if (strstr($hash, '$5$')) {
	$hashresult = "SHA-256(Unix) Hash";
	}
	} elseif (strlen($hash) == 39) {
	if (strstr($hash, '$6$')) {
	$hashresult = "SHA-512(Unix) Hash";
	}
	} elseif (strlen($hash) == 24) {
	if (strstr($hash, '==')) {
	$hashresult = "MD5(Base-64) Hash";
	}
	} else {
	$hashresult = "Hash type not found";
	}
	} else {
	$hashresult = "Not Hash Entered";
	}
	?>
	<center><br><Br><br>
	
	<form action="" method="POST">
	<tr>
	<table >
	<th colspan="5">Hash Identification</th>
	<tr class="optionstr"><B><td>Enter Hash</td></b><td>:</td>	<td><input type="text" name="hash" size='60' class="inputz" /></td><td><input type="submit" class="inputzbut" name="gethash" value="Identify Hash" /></td></tr>
	<tr class="optionstr"><b><td>Result</td><td>:</td><td><?php echo $hashresult; ?></td></tr></b>
	</table></tr></form>
	</center>