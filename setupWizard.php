<?php
/*
Developed by SMN Shuvo
 */
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <!-- Local CSS -->
    <link rel="stylesheet" href="css/rainbow.css">
    <link rel="stylesheet" href="css/setup.css">
    <title>Setup Wizard</title>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand"><i class="fas fa-magic rainbow_text_animated"></i> Setup Wizard</a>
        
    </div>
   
    
</nav>

<div class="container" id="setup-manager">
    <div class="row">

        <!-- Information section -->
        <div class="col-lg-8">
            <h3 id="info-heading">
            Welcome to the Setup Wizard !!!
            </h3>
        <p class="text-justify">
            It seems you are using this wizard for the first time. This <strong> Meal Management System </strong> is developed by 
            <strong> SMN Shuvo</strong> for his personal purpose. Let's get to know more about it.
            <div class="d-flex">
                <div class="row">
                <div class="col p-4 align-self-start">
                    <i class="fas fa-leaf fa-2x rainbow_text_animated"></i>                    
                        Enter a meal manager username and password                                            
                </div>
                <div class="col p-4 align-self-start">
                    <i class="fas fa-leaf fa-2x rainbow_text_animated"></i>                    
                        Choose a password and remember it                    
                </div>
                <div class="col p-4 align-self-start">
                    <i class="fas fa-leaf fa-2x rainbow_text_animated"></i>                    
                        Your email is important in case you forget the password                   
                </div>
                </div>
                
            </div>
            
        </p>

        </div>

        <!-- This section takes the entry -->
        <div class="col-lg-4 mb-4">
        <form action="createTable.php" action="POST">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-md" placeholder="Manager Username" id="manager-username">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-md" placeholder="Email" id="manager-email">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-md" placeholder="Password" id="manager-password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-md" placeholder="Confirm Password" id="manager-password-verifier">
                  </div>
                  <div class="alert d-none" id='manager-password-info'></div>                  
                  <input type="button" value="Next" id="manager-setup-action" class="btn btn-outline-success btn-block">
                </form>

        </div>

    </div>
</div>

<!-- mess members section -->
<div class="container y-4" id="mess-member-setup">
    <div class="row">

        <div class="col-md-4 mb-3">            
            <div class="card">
                <div class="card-header"><h4 class="text-justify"><i class="fa fa-users" aria-hidden="true"></i>  How many members do you have in your mess?</h4></div>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" id="total-mess-member" placeholder="Number of mess members">
                        <div class="input-group-apend">
                            <button class="btn btn-outline-secondary" type="button" id="mess-member-submit">
                             Next <i class="fa fa-chevron-right" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="alert alert-danger d-none d-lg-block">
                Invalid Password
            </div>
            
        </div>

        <div class="col-md-8 ">
            <div class="row" id="member-add-section">                
            </div>
            <div>
                <button class="btn btn-outline-secondary btn-block" id="submit-mess-members">
                    Create
                </button>
            </div>
        </div>

                <!-- end of mess member -->

                

                

                

            </div>
        </div>
    </div>    
</div>
<!-- end of section -->

<!-- Local JavaScripts -->
<script type="module" src="js/form-validator.js"></script>   
</body>
</html>