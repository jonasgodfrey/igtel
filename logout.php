<?php
require_once 'inc/db.php';
require 'inc/core.php';
session_destroy();

header('Location: index.php');
?>