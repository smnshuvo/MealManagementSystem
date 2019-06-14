<?php

/* 
 *  Developed by SMN Shuvo
 *  Using it without credit will be under copyright strike  * 
 */

include ('connect.php');
$date = date('l jS \of F Y h:i:s A');
echo "Submission ID " . $date ;
echo "<br>";
// idk why the mysql engine is not taking empty value 


$shuvo = filter_input(INPUT_POST, 'Shuvo');
$touhid = filter_input(INPUT_POST, 'Touhid');
$mahir = filter_input(INPUT_POST, 'Mahir');
$mehedi = filter_input(INPUT_POST, 'Mehedi');
$mahmud = filter_input(INPUT_POST, 'Mahmud');
$anik = filter_input(INPUT_POST, 'Anik');



// form input section 

$sql = "INSERT INTO mess_advance (time_of_adding, Shuvo, Touhid, Mahir, Mehedi, Mahmud, Anik) VALUES "
        . "('$date', '$shuvo', '$touhid', '$mahir', '$mehedi', '$mahmud', '$anik')";

if ($cnct->query($sql)){
    echo "Data added";
    echo "<br> <a href='meal.php'> Click Here to See the meals </a>";
}
else {
    echo "error" . $cnct->error;
}
// cloxd connection

 mysqli_close($cnct);
 
 
?>

