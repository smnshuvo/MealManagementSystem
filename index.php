<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-16">
        <title>
            
        </title>
        <link rel="stylesheet" type="text/css" href="css/mealTable.css">
        <link rel="stylesheet" type="text/css" href="css/nav.css">
    </head>
    <body>
        
         <nav>
            <!-- title -->
            <div id="title">
            <span id="smn">Meal</span>
            <span id="shuvo">Management</span>
            <span>System</span>
            </div>
            <!-- This is where all the links are -->
            <div id="links">
        <a href="index.php"> Home </a>
        <a href="routine.php"> Show meals </a>
                <a href="#"> Notifications </a>
            </div>
        </nav>
        <br>
        <br>
        
        <?php
        include ('connect.php');
        $sql = "SELECT * FROM mess_manager";
        $output ='';
        $result = mysqli_query($cnct, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            
            $output.=	"<tr>" . "<td id='date'>". $row['Date'] . "</td>" .
"<td id='Shuvo'>" . $row['Shuvo']. "</td>".
"<td id='Touhid'>" . $row['Touhid']. "</td>".
"<td id='Mahir'>" . $row['Mahir']. "</td>".
"<td id='Mehedi'>" . $row['Mehedi']. "</td>".
"<td id='Mahmud'>" . $row['Mahmud']. "</td>".
"<td id='Anik'>" . $row['Anik']. "</td>".
"<td id='Amount'>" . $row['Amount']. "</td>".                    
"<td id='done_by'>" . $row['done_by']. "</td>".
                    
			"</tr>";
          
    
}
 
// print part
print_r("<table>" ."<tr>". 
"<td id='date'>" . "Date". "</td>". "<td id='Shuvo'>" . "Shuvo". "</td>".
"<td id='Touhid'>" . "Touhid" . "</td>".
"<td id='Mahir'>" . "Mahir". "</td>".
"<td id='Mehedi'>" . "Mehedi" . "</td>".
"<td id='Mahmud'>" . "Mahmud". "</td>".
"<td id='Anik'>" . "Anik". "</td>". 
"<td id='Amount'>" . "Amount". "</td>". 
"<td id='done_by'>" . "Done by". "</td>".         
"</tr>" . $output . "</table>");
	
       
        ?>
    </body>
</html>
