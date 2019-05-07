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
        <link rel="stylesheet" type="text/css" href="css/Mealnav.css">
        <link rel="stylesheet" type="text/css" href="css/log-in.css">
        <!-- JS -->
        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
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
                <a href="mealHome.php"> Home </a>
                <a href="insert.php"> Add Meal </a>
                <a href="edit.php"> Edit Meal </a>
        <a href="meal.php"> Show meals </a>
            <a href="#" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</a>
            <a href="advance.php"> Advanced </a>     
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
        
        <div id="id01" class="modal">
  
    <form class="modal-content animate" action="verify-manager.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="image/manager.png" alt="Manager" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
 <!--    
 Session testing
        <?php
print_r($_SESSION);
?>
 -->
    </body>
    
    <!-- Log in Part-->
    
    






</html>
