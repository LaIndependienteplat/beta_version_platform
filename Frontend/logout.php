<?php
// Inialize session.
session_start();
session_destroy();
// Empty value and old timestamp.
setcookie('usr_lamas', '', time() + (7200)-7250, "/");
// Delete all session variables.
session_destroy();
// Jump to login page.
header("location: ../");
?>
