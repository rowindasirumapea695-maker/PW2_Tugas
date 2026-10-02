<?php
session_Start();
session_unset();
session_destroy();
header("Location: login.php");
exit;
?>