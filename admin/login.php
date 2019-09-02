<?php
session_start();
include "koneksi.php" ;
$username = $_POST['username'];
$password = $_POST['password'];
//$passwordhash = md5($password); // mengenkripsikannya untuk dicocokan dengan database
$perintahnya = "select username, password from user where username = '$username' and
password = '$password'";
$jalankanperintahnya = mysql_query($perintahnya);
$ada_apa_enggak = mysql_num_rows($jalankanperintahnya);
if ($ada_apa_enggak >= 1 )
{
$_SESSION['username'] = $username;
header("location: index.php");
}
else
echo '<script language="javascript">alert("Login Gagal!"); document.location="login1.php";</script>';
?>
			

//}
?>