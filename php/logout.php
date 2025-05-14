<?php
session_start();
session_unset();
session_destroy();
header("Location: /movie-world/index.php");
exit();