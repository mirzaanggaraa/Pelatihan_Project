<?php
session_start();
session_destroy();

echo 'logout berhasil!';
echo "<meta http-equiv='refresh' content='2;url=login.php'>";