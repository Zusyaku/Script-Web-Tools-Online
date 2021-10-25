<?php 
$submit = $_POST['enter'];
 if (isset($submit)) {
 $pass = $_POST['password']; // password
 $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 $hash = md5($pass); // md5 hash #1
 $md4 = hash("md4", $pass);
 $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
 $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
 $hash1 = sha1($pass); // sha1 hash #4
 $sha256 = hash("sha256", $text);
 $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
 $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
 }
 echo '<form action="" method="post">';
 echo '<center><h2>Hash Generator</h2>';
 echo '<table>';
 echo 'Masukkan teks yang ingin di encrypt: ';
 echo '<input class="inputz" type="text" name="password" size="40">';
 echo '<input class="inputzbut" type="submit" name="enter" value="Hash!">';
 echo '<br>';
 echo 'Original Password: <input class=inputz type=text size=50 value='.$pass.'><br><br>';
 echo 'MD5: <input class=inputz type=text size=50 value='.$hash.'><br><br>';
 echo 'MD4: <input class=inputz type=text size=50 value='.$md4 .'><br><br>';
 echo 'MD5 with Salt: <input class=inputz type=text size=50 value='.$hash_md5.'><br><br>';
 echo 'MD5 with Salt & Sha1: <input class=inputz type=text size=50 value='.$hash_md5_double.'><br><br>';
 echo 'Sha1: <input class=inputz type=text size=50 value='.$hash1 .'><br><br>';
 echo 'Sha256: <input class=inputz type=text size=50 value='.$sha256.'><br><br>';
 echo 'Sha1 with Salt: <input class=inputz type=text size=50 value='.$hash1_sha1.'><br><br>';
 echo 'Sha1 with Salt & MD5: <input class=inputz type=text size=50 value='.$hash1_sha1_double.'></center></table>';
  ?>