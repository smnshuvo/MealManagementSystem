<?php

// contains the file that is needed to connect to the database
include('connect.php');
$TABLE_NAME = "messages";
    $SQL = "Select message_body from $TABLE_NAME";
    $result = mysqli_query($conn, $SQL);
    $arrResult = array();
    while ($row = $result->fetch_row()) {
        array_push($arrResult,$row[0]);
    }
    echo json_encode($arrResult);











/* 
Table 1
CREATE TABLE `messages`. ( `m_id` INT NOT NULL AUTO_INCREMENT , `message_body` VARCHAR(20000) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL , `message_importance` VARCHAR(15) NULL DEFAULT NULL , PRIMARY KEY (`index`)) ENGINE = InnoDB; */
/*
Table 2
CREATE TABLE `test`.`message_log` ( `msg_serial` INT NOT NULL AUTO_INCREMENT , `msg_id` INT NOT NULL , `msg_from` VARCHAR(20) NOT NULL , `msg_to` VARCHAR(20) NOT NULL , PRIMARY KEY (`msg_serial`), INDEX (`msg_id`)) ENGINE = InnoDB;
*/
?>

