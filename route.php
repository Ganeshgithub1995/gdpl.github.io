<?php
$request = $_SERVER['REQUEST_URI'];
$r = str_replace('/', '', $request);
//echo $r;exit;
include('admin/config.php');
$arr = explode('/', $r);
if ($r == '' || $r == 'index' || $r == 'index.php') {
	include('index.php');
} elseif ($r == 'about') {
	include('about.php');
} elseif ($r == 'whyus') {
	include('whyus.php');
} elseif ($r == 'careers') {
	include('careers.php');
} elseif ($r == 'contact') {
	include('contact.php');
} elseif ($r == 'admin/' || $r == 'admin/index' || $r == 'admin') {
	include('admin/index.php');
} else {
	$mqry = "SELECT * FROM `services` WHERE ser_id='$r'";
	$mres = $db->query($mqry);
	if ($mres->num_rows > 0) {
		include('services.php');
	} else {
		include('404.php');
	}
}