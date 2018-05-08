<?php
session_start();
include "conexao.php";
session_destroy();
header("location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>