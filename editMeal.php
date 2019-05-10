<?php
/* 
 *  This project is developed my SMN Shuvo
 *  Copyright Protected, Project must be used with proper credit  * 
 */

include ('connect.php');
$date = filter_input(INPUT_POST, 'Date');
$shuvo = filter_input(INPUT_POST, 'Shuvo');
$touhid = filter_input(INPUT_POST, 'Touhid');
$mahir = filter_input(INPUT_POST, 'Mahir');
$mehedi = filter_input(INPUT_POST, 'Mehedi');
$mahmud = filter_input(INPUT_POST, 'Mahmud');
$anik = filter_input(INPUT_POST, 'Anik');
$amount = filter_input(INPUT_POST, 'Amount');
$done_by = filter_input(INPUT_POST, 'done_by');
// form input section 

$sql = "UPDATE `mess_manager` SET "
        . "`Shuvo` = $shuvo, "
        . "`Touhid` = $touhid, "
        . "`Mahir` = $mahir, "
        . "`Mehedi` = $mehedi, "
        . "`Mahmud` = $mahmud, "
        . "`Anik` = $anik, "
        . "`Amount` = $amount, "
        . "`done_by` = '$done_by' "
        . "WHERE `mess_manager`.`Date` = $date";

if ($cnct->query($sql)){
    echo "Data edited";
    echo "<br> <a href='meal.php'> Click Here to See the meals </a>";
}
else {
    echo "error" . $cnct->error;
}

 // cloxd connection

 mysqli_close($cnct);
 ?>