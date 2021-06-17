<?php
    include("connect.php");//Including the connect.php file's data to this logic

    if($con){//Checking if a connection has been established
        if(isset($_POST['email']) && isset($_POST['password'])){//Checking if there is an email and password
            $query = "SELECT * FROM user WHERE email = '".$_POST['email']."'";
            $result = mysqli_query($con, $query);//Saving the query in a variable called result

            if(mysqli_num_rows($result) > 0){//Checking if the data is in the database
                while($row = mysqli_fetch_assoc($result)){
                    if($row['password'] == md5(md5($_POST['password']))){//Checking if the password entered matches the one in the database
                        session_start();//Starting a session to ensure the users data can be sent across the different web pages
                        $_SESSION['email'] = $_POST['email'];//Saving the email entered in the session
                        $_SESSION['name'] = $row['name'];//Saving the users name in the session
                        $_SESSION['ID'] = $row['ID'];//Saving the users ID in the session
                        header("location: index.php");//Redirecting to the homepage on successful login
                    }else{
                        header("location: login.php");//Redirecting back to the login page if the email and or password entered was incorrect
                    }
                }              
            }
        }else{
            header("location: login.php");//Loading the login screen if the email and or password is blank
        }
    }else{
        die();//Exiting if there is on connection
    }

?>