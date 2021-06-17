<?php
    include("connect.php");//Including the connect.php file's data to this logic

    if($con){//Checking if a connection has been established
        if(isset($_POST["email"]) && isset($_POST["password"])){//Checking if there is an email and password
            $query = "INSERT INTO user(name, email)
            VALUES('".$_POST['fullname']."', '".$_POST['email']."')";//Adding the entered information into the database

            if(mysqli_query($con, $query)){//Checking if the entered information exists in the database
                $save_password = "UPDATE user SET password = '".md5(md5($_POST['password']))."' WHERE ID = ".mysqli_insert_id($con)."";//Saving a hashed md5 password by updating the users data in the database

                if(mysqli_query($con, $save_password)){//Checking if the hashed password has been added to the users data
                    header("location: login.php");//Loading the login page upon successful account creation
                }else{
                    header("location: register.php");//Loading the register page again if the registration was not successful
                }
            }
        }
    }else{
        die();//Exiting if there is no connection to the database
    }

?>