<html>
    <head>
        <title>
            Add your meal
        </title>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" type="text/css" href="css/Mealnav.css">
        <link rel="stylesheet" type="text/css" href="css/customRadioButton.css">
    </head>
    
    <body>
        <!-- Main Navigation Bar -->
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
        
        <!-- Form that will help to post meal -->
        <form method="post" action="addMeal.php">
            <br> Date: <input type="text" name="Date" 
                              
                                
            <?php
                              $today = date("d");
                              echo "value='$today'>" ;
                              ?>
                              
            <!-- We don't expect more than 5 meals a day from any of use -->
            <br> Shuvo: <br>
            <input type="radio" name="Shuvo" value="0"> 0 
            <input type="radio" name="Shuvo" value="1"> 1     
            <input type="radio" name="Shuvo" value="2"> 2
            <input type="radio" name="Shuvo" value="3"> 3
            <input type="radio" name="Shuvo" value="4"> 4
            <input type="radio" name="Shuvo" value="5"> 5
            <br> Touhid: <br>
            <input type="radio" name="Touhid" value="0"> 0
            <input type="radio" name="Touhid" value="1"> 1     
            <input type="radio" name="Touhid" value="2"> 2
            <input type="radio" name="Touhid" value="3"> 3
            <input type="radio" name="Touhid" value="4"> 4
            <input type="radio" name="Touhid" value="5"> 5
            <br> Mahir: <br> 
            <input type="radio" name="Mahir" value="0"> 0 
            <input type="radio" name="Mahir" value="1"> 1     
            <input type="radio" name="Mahir" value="2"> 2
            <input type="radio" name="Mahir" value="3"> 3
            <input type="radio" name="Mahir" value="4"> 4
            <input type="radio" name="Mahir" value="5"> 5 
            <br> Mehedi  <br>
            <input type="radio" name="Mehedi" value="0"> 0  
            <input type="radio" name="Mehedi" value="1"> 1     
            <input type="radio" name="Mehedi" value="2"> 2
            <input type="radio" name="Mehedi" value="3"> 3
            <input type="radio" name="Mehedi" value="4"> 4
            <input type="radio" name="Mehedi" value="5"> 5
            <br> Mahmud  <br>
            <input type="radio" name="Mahmud" value="0"> 0  
            <input type="radio" name="Mahmud" value="1"> 1     
            <input type="radio" name="Mahmud" value="2"> 2
            <input type="radio" name="Mahmud" value="3"> 3
            <input type="radio" name="Mahmud" value="4"> 4
            <input type="radio" name="Mahmud" value="5"> 5
            <br> Anik  <br>
            <input type="radio" name="Anik" value="0"> 0 
            <input type="radio" name="Anik" value="1"> 1     
            <input type="radio" name="Anik" value="2"> 2
            <input type="radio" name="Anik" value="3"> 3
            <input type="radio" name="Anik" value="4"> 4
            <input type="radio" name="Anik" value="5"> 5
            <br> Total <input type="text" name="Amount">
            <br> Done by: <select name="done_by">
                <option value="Shuvo">Shuvo</option>
                <option value="Mahir">Mahir</option>
                <option value="Towhid">Towhid</option>
                <option value="Mehedi">Mehedi</option>
                <option value="Mahmud">Mahmud</option>
                <option value="Anik">Anik</option>
            </select>
            <br> Password: 
            <input type="password" name="password">
          <input type="submit" value="submit">
        </form>
    </body>
</html>