<?php

session_start();

// session  logout function

session_unset();

// when session logout redirecte index page

header('location:index.php');
?>