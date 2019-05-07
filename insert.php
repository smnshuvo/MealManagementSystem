<html>
    <head>
        <title>
            Add your meal
        </title>
        <link rel="stylesheet" type="text/css" href="css/form.css">
        <link rel="stylesheet" type="text/css" href="css/Mealnav.css">
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
            <br> Date: <input type="text" name="Date"> 
         <br> Shuvo: <input type="text" name="Shuvo"> 
            Touhid: <input type="text" name="Touhid"> 
          Mahir: <input type="text" name="Mahir">  
           <br> Mehedi <input type="text" name="Mehedi"> 
           Mahmud <input type="text" name="Mahmud"> 
            Anik <input type="text" name="Anik"> 
           <br> Total <input type="text" name="Amount">
         <br> Done by: <input type="text" name="done_by">
          <input type="submit" value="submit">
        </form>
    </body>
</html>