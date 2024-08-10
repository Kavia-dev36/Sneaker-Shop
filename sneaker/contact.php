 <?php
$con=mysqli_connect("localhost","root","","login_register");
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO contact(name, email, message) VALUES('{$name}','{$email}','{$message}')";
$result = mysqli_query($con, $sql) or die("Query Failed!");

mysqli_close($con);
?>