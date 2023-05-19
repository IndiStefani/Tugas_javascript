<?php
$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];

include_once("../koneksi_php/koneksi.php");

$result = mysqli_query ($conn, "INSERT INTO customer (first_name, last_name, email, phone, address) VALUES ('$first', '$last', '$email', '$phone', '$address');");

header("Location:home.php");
?>