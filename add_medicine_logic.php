<?php
    include("connect.php");
    session_start();

    if($con){
        if($_SESSION['email'] != ""){
            if(isset($_POST['name'])){
                $query = "INSERT INTO medicine(name, dosage_quantity, dosage_unit, milligram_quantity, milligram_unit, frequency_quantity, frequency_unit, user_ID)
                VALUES('".$_POST['name']."', ".$_POST['dosage_quantity'].", '".$_POST['dosage_unit']."', ".$_POST['milligram_quantity'].", '".$_POST['milligram_unit']."', ".$_POST['frequency_quantity'].", '".$_POST['frequency_unit']."', ".$_SESSION['ID'].")";

                if(mysqli_query($con, $query)){
                    echo "<h1>MEDICINE ADDED SUCCESSFULLY</h1>";
                    header("location: add_medicine.php");
                }else{
                    echo "<h1>MEDICINE NOT ADDED SUCCESSFULLY</h1>";
                    header("location: add_medicine.php");
                }
            }
        }
    }
?>