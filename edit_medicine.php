<?php
    include("connect.php");
    session_start();
    if($_SESSION['email'] == ""){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
    <link rel="stylesheet" href="index.css" type="text/css">
</head>
<body>
    <header>
        <a href="index.php">Home</a> | 
        <a href="add_medicine.php">Add Medicine</a> | 
        <a href="notifications.php">Notifications</a> | 
        <a href="dosage_list.php">Dosage</a> |
        <a href='logout.php'>Logout</a>
    </header>
    <form action="update_medicine_logic.php" method="post">
        <h1>UPDATE MEDICINE</h1>
        <?php
            $id = $_GET['id'];
            
            $query = "SELECT * FROM medicine WHERE ID = ".$id."";
            $result = mysqli_query($con, $query);
            while($row = mysqli_fetch_array($result)){
                echo "<label for='id'>
                        <input type='hidden' name='ID' id='id' value=".$row['ID'].">
                    </label>";
                echo "<label for='medicine_name'>Medicine name
                        <input type='text' name='name' id='medicine_name' value=".$row['name'].">
                    </label>";
                
                echo "<label for='dosage_quantity'>Dosage Quantity
                        <input type='number' name='dosage_quantity' id='dosage_quantity' value=".$row['dosage_quantity'].">
                    </label>";
                if($row['dosage_unit'] == "Tab"){
                    echo "<label for='dosage_unit'>Dosage Unit</label>
                    <select name='dosage_unit' id='dosage_unit'>
                        <option value='Tab' selected>Tab</option>
                        <option value='Bottle'>Bottle</option>
                        <option value='Syringe/Injection'>Syringe/Injection</option>
                    </select>";
                }else if($row['dosage_unit'] == "Bottle"){
                    echo "<label for='dosage_unit'>Dosage Unit</label>
                    <select name='dosage_unit' id='dosage_unit'>
                        <option value='Tab'>Tab</option>
                        <option value='Bottle' selected>Bottle</option>
                        <option value='Syringe/Injection'>Syringe/Injection</option>
                    </select>";
                }else if($row['dosage_unit'] == "Syringe/Injection"){
                    echo "<label for='dosage_unit'>Dosage Unit</label>
                    <select name='dosage_unit' id='dosage_unit'>
                        <option value='Tab'>Tab</option>
                        <option value='Bottle'>Bottle</option>
                        <option value='Syringe/Injection' selected>Syringe/Injection</option>
                    </select>";
                }
                echo "<label for='milligram'>Milligram
                        <input type='text' name='milligram_quantity' id='milligram' value=".$row['milligram_quantity'].">
                    </label>";

                if($row['milligram_unit'] == "g"){
                    echo "<label for='unit'>Milligram Unit</label>
                    <select name='milligram_unit' id='unit'>
                        <option value='g' selected>g</option>
                        <option value='mg'>mg</option>
                    </select>";
                }else if($row['milligram_unit'] == "mg"){
                    echo "<label for='unit'>Milligram Unit</label>
                    <select name='milligram_unit' id='unit'>
                        <option value='g'>g</option>
                        <option value='mg' selected>mg</option>
                    </select>";
                }

                echo "<label for='frequency_quantity'>Frequency Quantiy
                        <input type='number' name='frequency_quantity' id='frequency_quantity' value=".$row['frequency_quantity'].">
                    </label>";

                if($row['frequency_unit'] == "Daily"){
                    echo "<label for='frequency_unit'>Frequency Unit</label>
                    <select name='frequency_unit' id='frequency_unit'>
                        <option value='Daily' selected>Daily</option>
                        <option value='Per Day'>Per Day</option>
                        <option value='Per Week'>Per Week</option>
                    </select>";
                }else if($row['frequency_unit'] == "Per Day"){
                    echo "<label for='frequency_unit'>Frequency Unit</label>
                    <select name='frequency_unit' id='frequency_unit'>
                        <option value='Daily'>Daily</option>
                        <option value='Per Day' selected>Per Day</option>
                        <option value='Per Week'>Per Week</option>
                    </select>";
                }else if($row['frequency_unit'] == "Per Week"){
                    echo "<label for='frequency_unit'>Frequency Unit</label>
                    <select name='frequency_unit' id='frequency_unit'>
                        <option value='Daily'>Daily</option>
                        <option value='Per Day'>Per Day</option>
                        <option value='Per Week' selected>Per Week</option>
                    </select>";
                }
            }
        ?>
        <button>UPDATE</button>
        <br>
        <a href="index.php">View Medicines</a>
    </form>
</body>
</html>