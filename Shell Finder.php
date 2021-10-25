<?php 
echo '<center><h2>Shell Finder</h2>
	<form action="" method="post">
	<input type="text" size="50" name="traget" value="https://source.helixs.tech/"/>
	<br><br>
	<input name="scan" value="Cari"  style="width: 215px;" class="kotak" type="submit">
	</form><br>';
	if (isset($_POST["scan"])) {
	$url = $_POST['traget'];
	echo "<br /><span class='start'>Scanning " . $url . "<br /><br /></span>";
	echo "Result :<br />";
	$shells = array("WSO.php", "alfashell.php", "alfa.php", "shell.php", "mini.php", "mini.phtml", "minishell.phtml", "dz.php", "xxx.php", "x.php", "heker.php", "indosec.php", "sec.php", "0x.php", "memek.php", "sym.php", "sym403.php", "tolol.php", "x.php", "r99.php", "lol.php", "jo.php", "nikung.php", "whmcs.php", "shellz.php", "d0main.php", "d0mains.php", "users.php", "Cgishell.php", "killer.php", "changeall.php", "2.php", "Sh3ll.php", "dz0.php", "dam.php", "user.php", "dom.php", "whmcs.php", "vb.zip", "evil.php", "eviltwin.php", "zx.php", "kntl.php", "kuntul.php", "r00t.php", "c99.php", "gaza.php", "1.php", "wp.zip","d00.php","admins.php", "admins.php", "wp.zip", "wso2.5.1", "pasir.php", "pasir2.php", "up.php", "cok.php", "newfile.php", "upl.php", ".php", "a.php", "crot.php", "kontol.php", "hmei7.php", "jembut.php", "memek.php", "tai.php", "rabit.php", "indoxploit.php", "a.php", "hemb.php", "hack.php", "galau.php", "HsH.php", "indoXploit.php", "asu.php", "wso.php", "lol.php", "berandal.php", "rabbit.php", "1n73ction.php", "k.php", "mailer.php", "mail.php", "temp.php", "c.php", "d.php", "IDB.php", "indo.php", "indonesia.php", "semvak.php", "ndasmu.php", "berandal.php", "as.php", "ad.php", "aa.php", "file.php", "peju.php", "sad.php", "sadboy.php", "wsa.php", "z.php", "min.php", "alf4.php", "priv.php", " priv8.php", "boyshell.php", "evil.php", "api.php", "evilshell.php", "uploader.php");
	foreach ($shells as $shell) {
	$headers = get_headers("$url$shell"); //
	if (eregi('200', $headers[0])) {
	echo "<a href='$url$shell'>$url$shell</a> <span class='found'>Selese Cok!</span><br /><br/><br/>"; //
	$dz = fopen('shells.txt', 'a+');
	$suck = "$url$shell";
	fwrite($dz, $suck . "
	");
	}
	}
	echo "Shell [ <a href='./shells.txt' target='_blank'>shells.txt</a> ]</span>";
	}
	?>