<?php
setcookie("username", "", time() - 3600);
echo '<script>window.location="login.php";</script>';
