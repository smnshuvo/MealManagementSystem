<?php
include('connect.php');

$user = $_POST["Name"];
$pass = $_POST["Key"];

$sql = "INSERT INTO users (USERNAME, PASSWORD) VALUES ('$user', '$pass')";

if($cnct->query($sql)){
    echo "<b> Data Added </b>";
} else {
    echo "Duplicate Data";
}
?>