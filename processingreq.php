<?php
error_reporting(0);
$center =  $_GET["loc"];
$center = str_replace('(','',$center);
$center = str_replace(')','',$center);
$geoarray = explode(",", $center);
$placelat = $_GET['placelat'];
$placelng = $_GET['placelng'];
session_start();

$latitudes = $_SESSION['locationslat'];
$longitudes = $_SESSION['locationslong'];
$keyword = $_SESSION['keyword'];
$addresses = $_SESSION['addresses'];
$MethodofTravel = $_SESSION['MethodofTravel'];

$_SESSION['allowed_access'] = false;
?>