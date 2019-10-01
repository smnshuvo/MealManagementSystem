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
$password = filter_input(INPUT_POST, 'password');
$salt = "MealManagementSystem";
$password_encrypted = hash('sha256', $password . $salt);

$password_from_db = hash('sha256', "1122334455" . $salt);

// form input section 

$sql = "INSERT INTO mess_manager (Date, Shuvo, Touhid, Mahir, Mehedi, Mahmud, Anik, Amount, done_by) VALUES "
        . "('$date', '$shuvo', '$touhid', '$mahir', '$mehedi', '$mahmud', '$anik' ,'$amount', '$done_by')";

if ($password_from_db == $password_encrypted) {
    if (isset($_POST['Date'])) {

        if ($cnct->query($sql)) {
            echo "Data added";
            echo "<br> <a href='meal.php'> Click Here to See the meals </a>";
        } else {
            echo "error" . $cnct->error;
        }
    }
} else {
    echo "<h1 style='color:red;'> Wrong Password </h1>";
   
}


// cloxd connection

mysqli_close($cnct);
?>
