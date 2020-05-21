<?php
include('connect.php');
include('_User_.php');

$postID = $_POST['POST_ID'];
$messageJSON = $_POST['JSON_DATA'];
$API_KEY = $_SERVER['HTTP_API_KEY'];

$mObject = json_decode($messageJSON);

$mManager = new User($mObject->username,
                    $mObject->password,
                    $mObject->email,
                    $mObject->isAdmin,
                    );



?>