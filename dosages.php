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
    <title>Dosage Page</title>
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

    <form action="dosage_logic.php" method="post">
        <h1>DOSAGE TAKEN</h1>
        <label for="email">Medicine Name</label>
        <select name='medicine_id' id='medicine_name'>
            <?php
                $query = "SELECT * FROM medicine WHERE user_ID = ".$_SESSION['ID']."";
                $result = mysqli_query($con, $query);

                while($row = mysqli_fetch_array($result)){
                    echo "<option value='".$row['ID']."'>".$row['name']."</option>";
                }
            ?>
        </select>

        <label for="date_taken">Date taken
            <input type="date" name="date_taken" id="date_taken">
        </label>

        <label for="time_taken">Time taken
            <input type="time" name="time_taken" id="time_taken">
        </label>

        <label for="quantity">Quantity
            <input type="number" name="quantity" id="quantity">
        </label>

        <button>SAVE</button>
    </form>
</body>
</html>