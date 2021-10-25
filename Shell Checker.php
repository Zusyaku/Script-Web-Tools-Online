<?php
echo '<center>
<form name="frmcontadd" action="" method="post"><textarea placeholder="source.helixs.tech/shell.php" name="url" cols=115 rows=10></textarea><br><br><input class="subbtn" type="submit" name="Submit" value="Yamete Kudasai"></form>';
?>
<?php
function get_http_response_code($theurl) {
    $headers = get_headers($theurl);
    $status = substr($headers[0], 9, 3);
    $p = parse_url($theurl);
    $host = explode(':', $p['host']);
    $hostname = $host[0];
    if ($status == 200) {
       $visitor = $_SERVER["REMOTE_ADDRS"];
        $judul = "shell: $theurl ";
        $body = "shell: $theurl";
        if (!empty($theurl)) {
            @mail("emailmu@gmail.com", $judul, $body);
        }
        $writeuRl = $theurl . "
";
        $fh = fopen("hasil.txt", "a");
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo '<strong><font color=Green>Found</font></strong> - <a href="" . $theurl . "" target=_blank>' . $theurl . '</a><br />';
    } elseif ($status == 500) {
        echo '<strong><font color=black>" . $status . " 500 Internal Server Error !</font></strong> - <a href="" . $theurl . "" target=_blank>" . $theurl . "</a><br />';
    } else {
        $writeuRl = $theurl . "
";
        $fh = fopen("sampah.txt", "a");
        fwrite($fh, $writeuRl, strlen($writeuRl));
        echo '<strong><font color=red>Not Found</font></strong> - <a href="" . $theurl . "" target=_blank>" . $theurl . "</a><br />';
    }
}
if (isset($_POST['Submit'])) {
    $hosts = explode("
", $_POST['url']);
   
    $values = array();
    foreach ($hosts as $host) {
        if ($host != "") {
            @get_http_response_code("$host");
        }
    }
    echo '<br /><strong>Selesai</strong>';
}
	?>