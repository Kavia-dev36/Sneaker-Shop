<?php
$conn = mysqli_connect("localhost", "root", "", "login_register") or die("connection failed");
$name = $_POST["name"];
$email = $_POST["email"];
$add = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$card = $_POST["card"];
$mon = $_POST["mon"];
$year = $_POST["year"];
$cvv=$_POST["cvv"];

$sql = "INSERT INTO payment(name, email, address, city,state,zip,card,expmon,expyr,cvv) VALUES('{$name}','{$email}','{$add}','{$city}','{$state}','{$zip}','{$card}','{$mon}','{$year}','{$cvv}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: home.html");
mysqli_close($conn);
?>