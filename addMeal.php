<?php
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

$sql = "INSERT INTO mess_manager (Date, Shuvo, Touhid, Mahir, Mehedi, Mahmud, Anik, Amount, done_by) VALUES "
        . "('$date', '$shuvo', '$touhid', '$mahir', '$mehedi', '$mahmud', '$anik' ,'$amount', '$done_by')";

if ($cnct->query($sql)){
    echo "Data added";
    echo "<br> <a href='meal.php'> Click Here to See the meals </a>";
}
else {
    echo "error" . $cnct->error;
}
?>
