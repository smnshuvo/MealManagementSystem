
<!--
/* 
 *  Developed by SMN Shuvo
 *  Using it without credit will be under copyright strike  * 
 */

-->

<html>
    <head>
        <meta charset="UTF-16">
        <title>
            
        </title>
        <link rel="stylesheet" type="text/css" href="css/Mealnav.css">
        <link rel="stylesheet" type="text/css" href="css/log-in.css">
          
 
 <script  src="css/script.js"></script>
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
                <a href="#"> Notifications </a>
                
            </div>
        </nav>
        
        <div class="Poster">
            <form action='post-data.php' method="post" enctype="multipart/form-data" >
                <!-- I don't know why I am having to use enctype="multipart/form-data" -->
                <p> Select Date </p>
                <input type='date' name='date'>
                <p> Title of your post </p>
                <input type='text' name='title'>
                <p> Post Details </p>
                <input type='text' name='content'>
                <p> Attach images </p>
                <input type='file' name='image'>
                <p> </p>
                <input type='submit' name='submit_image' value='Submit Content'>
                
                
            </form>
            
        </div>
        
        <div class="posts">
          
            
        </div>
        
    </body>
    
   
            
            
            