<?php 

session_start();

session_unset();

session_destroy();

?><script>localStorage.clear();</script><?php

header("Location: home.php");

?>