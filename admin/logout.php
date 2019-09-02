<?php
session_start();
session_destroy();
//echo "<script>alert('Terima kasih, Anda Berhasil Logout')</script>";
echo '<script language="javascript">alert("Terima kasih, Anda Berhasil Logout"); document.location="../index.php";</script>';
?>