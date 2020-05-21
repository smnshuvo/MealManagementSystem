<?php
include('connect.php');
class User{
    private $username;
    private $email;
    private $password;
    private $isAdmin;

    function __construct($username, $email, $password, $isAdmin){
    $this->$username = $username;
    $this->$email = $email;
    $this->$password = $password;
    $this->$isAdmin = $isAdmin;
    }

    function createUserTable(){
        $TABLE_NAME = "mess_members";
        $MEMBER_TABLE_SQL = "
            CREATE TABLE IF NOT EXISTS $TABLE_NAME(
            uname VARCHAR(20) PRIMARY KEY,
            email VARCHAR(40) NOT NULL,
            pswd VARCHAR(100) NOT NULL,
            isAdmin BIT(1) DEFAULT 0,
            fullName VARCHAR(50),
            cellNo NVARCHAR(12)
            );
        ";

        if($conn->query($MEMBER_TABLE_SQL)){
            echo "OK";
        } else {
            echo $conn->error;
        }

    }



}

?>