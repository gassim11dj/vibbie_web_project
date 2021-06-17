<?php
    include("connect.php");
    session_start();

    if($con){
        $query = "INSERT INTO dosage(medicine_id, date, time, quantity)
        VALUES(".$_POST['medicine_id'].", '".$_POST['date_taken']."', '".$_POST['time_taken']."', ".$_POST['quantity'].")";

        if(mysqli_query($con, $query)){
            $get_medicine = "SELECT * FROM medicine WHERE ID = ".$_POST['medicine_id']."";
            $result = mysqli_query($con, $get_medicine);

            while($row = mysqli_fetch_array($result)){
                $amount = $row['amount_taken'] + $_POST['quantity'];

                $update_medicine = "UPDATE medicine SET amount_taken = ".$amount." WHERE ID = ".$_POST['medicine_id']."";
    
                if(mysqli_query($con, $update_medicine)){
                    header("location: notifications.php");
                }else{
                    echo "<h1>DOSAGE NOT ADDED SUCCESSFULLY</h1>";    
                }
            }
        }else{
            echo "<h1>DOSAGE NOT ADDED SUCCESSFULLY</h1>";
            header("location: dosages.php?id=");
        }
    }
?>