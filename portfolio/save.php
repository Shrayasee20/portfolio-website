<?php

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "contact_form") or die("connection failed");
$sql = "INSERT INTO contact_table(Name, Email, Mobile, Message) VALUES ('{$name}','{$email}','{$mobile}','{$message}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/portfolio/#contact");
mysqli_close($conn);
?>