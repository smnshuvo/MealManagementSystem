<?php



/* 
 *  Developed by SMN Shuvo
 *  Using it without credit will be under copyright strike  * 
 */
include ('connect.php');
$currentMonth = date('F');
$lastMonth = Date('F', strtotime($currentMonth . " last month")); // for previous month name
$members = ["Shuvo","Towhid","Mahir","Mehedi","Mahmud","Anik"];
$form = "<form action='' method='post'>".
        $members[0]. ":".
        "<input type='text' name='member1'> <br>".
        $members[1]. ":".
        "<input type='text' name='member2'> <br>".
        $members[2]. ":".
        "<input type='text' name='member3'> <br>".
        $members[3]. ":".
        "<input type='text' name='member4'> <br>".
        $members[4]. ":".
        "<input type='text' name='member5'> <br>".
        $members[5]. ":".
        "<input type='text' name='member6'> <br>".
        "<p> Master Password </p>".
        "<input type='text' value='$lastMonth' name='monthName'> <br>".
        "<input type='password' name='password'> <br>".
        "<input type='submit' name='submit_query' values'Submit'>"
        ;
echo "<h1>Intial Advance:</h1><br>";
echo  $form;

$form_data = array();
$form_data[0] = filter_input(INPUT_POST, 'member1');
$form_data[1] = filter_input(INPUT_POST, 'member2');
$form_data[2] = filter_input(INPUT_POST, 'member3');
$form_data[3] = filter_input(INPUT_POST, 'member4');
$form_data[4] = filter_input(INPUT_POST, 'member5');
$form_data[5] = filter_input(INPUT_POST, 'member6');
$form_data[6] = filter_input(INPUT_POST, 'monthName');
$form_data[7] = filter_input(INPUT_POST, 'password');



$tableName = null;
$delete_query = "TRUNCATE TABLE mess_advance";
$initial_balance = "INSERT INTO mess_advance values (1 , 'INITIAL' , '$form_data[0]' , '$form_data[1]' , '$form_data[2]' , '$form_data[3]' , '$form_data[4]' , '$form_data[5]' )";
if ($form_data[7] == '111222'){
if (isset($_POST['submit_query'])){
    $tableName = "mess_".$form_data[6].date("Y");
if (mysqli_query($cnct, $delete_query)){
    echo "Deleted";
    if (mysqli_query($cnct, $initial_balance)){
        echo "INSERTED";
    } else {
        echo $cnct->error;
    }
}
$new_table = "CREATE TABLE IF NOT EXISTS $tableName LIKE mess_manager;";
$populate_new_table = "INSERT $tableName SELECT * FROM mess_manager;";

if (mysqli_query($cnct, $new_table)){
    echo "<br> NEW TABLE CREATED";
     if (mysqli_query($cnct, $populate_new_table)){
         echo "<br> NEW TABLE POPULATED";
    } if (mysqli_query($cnct, 'TRUNCATE mess_manager')){
         echo "<br> EXISTING TABLE EMPIED";
    }
} else {
    $cnct->error;
}


} 

} // end of if ($form_data[7] == '111222')



?>