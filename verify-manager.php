<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$usr = filter_input(INPUT_POST, 'uname');
$pass = filter_input(INPUT_POST, 'psw');

if($usr=="towhid-may" && $pass="12345"){
    echo "OK";
} else {
    echo "ERR";
}

?>

