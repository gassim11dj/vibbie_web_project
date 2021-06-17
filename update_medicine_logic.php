<?php
    include("connect.php");
    session_start();

    if($con){
        if($_SESSION['email'] != ""){
            $query = "UPDATE medicine SET name = '".$_POST['name']."',
            dosage_quantity = ".$_POST['dosage_quantity'].",
            dosage_unit = '".$_POST['dosage_unit']."',
            milligram_quantity = ".$_POST['milligram_quantity'].",
            milligram_unit = '".$_POST['milligram_unit']."',
            frequency_quantity = ".$_POST['frequency_quantity'].",
            frequency_unit = '".$_POST['frequency_unit']."'
            WHERE ID = ".$_POST['ID']."";

            if(mysqli_query($con, $query)){
                echo "<h1>MEDICINE UPDATED SUCCESSFULLY</h1>";
                header("location: index.php");
            }else{
                echo "<h1>MEDICINE NOT UPDATED</h1>";
                header("location: edit_medicine.php?id=".$POST['ID']."");
            }
        }
    }
?>