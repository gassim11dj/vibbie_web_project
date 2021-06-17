<?php
    include("connect.php");

    if($_GET['id']){
        $id = $_GET['id'];
        
        $query = "DELETE FROM medicine WHERE ID = ".$id."";

        if(mysqli_query($con, $query)){
            header("location: index.php");
        }else{
            echo "<h1>RECORD NOT DELETED</h1>";
        }
    }else{
        echo "<h1>NO ID SEEN</h1>";
    }
?>