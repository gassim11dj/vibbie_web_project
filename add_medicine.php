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
    <form action="add_medicine_logic.php" method="post">
        <h1>ADD MEDICINE</h1>
        <label for="medicine_name">Medicine name
            <input type="text" name="name" id="medicine_name" placeholder="Medicine Name" required>
        </label>
        <label for="dosage_quantity">Dosage Quantity
            <input type="number" name="dosage_quantity" id="dosage_quantity" required>
        </label>
        <label for="dosage_unit">Dosage Unit</label>
        <select name="dosage_unit" id="dosage_unit">
            <option value="Tab" selected>Tab</option>
            <option value="Bottle">Bottle</option>
            <option value="Syringe/Injection">Syringe/Injection</option>
        </select>
        <label for="milligram">Milligram
            <input type="text" name="milligram_quantity" id="milligram" placeholder="Milligram" required>
        </label>
        <label for="unit">Milligram Unit</label>
        <select name="milligram_unit" id="unit">
            <option value="g" selected>g</option>
            <option value="mg">mg</option>
        </select>
        <label for="frequency_quantity">Frequency Quantiy
            <input type="number" name="frequency_quantity" id="frequency_quantity" placeholder="Frequency Quantity" required>
        </label>
        <label for="frequency_unit">Frequency Unit</label>
        <select name="frequency_unit" id="frequency_unit">
            <option value="Daily" selected>Daily</option>
            <option value="Per Day">Per Day</option>
            <option value="Per Week">Per Week</option>
        </select>
        <button>ADD</button>
        <br>
        <a href="index.php">View Medicines</a>
    </form>
</body>
</html>