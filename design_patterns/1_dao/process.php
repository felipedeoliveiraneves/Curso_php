<?php

include_once("db.php");
include_once("dao/CarDAO.php");

$carDao = new CarDao($conn);

$brand = $_POST["brand"];
$km = $_POST["km"];
$color = $_POST["color"];

$newcar = new Car();

$newcar->setBrand($brand);
$newcar->setKm($km);
$newcar->setColor($color);

$carDao->create($newcar);

header("location: index.php");
