<?php
    include("connect.php");
    if(session_start()){
        if($_SESSION['email'] == ""){
            header("location: login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosage List</title>
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

    <main>
        <ol>
            <?php
                $query = "SELECT * FROM dosage";
                $result = mysqli_query($con, $query);

                if($result){
                    while($row = mysqli_fetch_array($result)){
                        $medicine_query = "SELECT * FROM medicine WHERE ID = ".$row['medicine_id']." AND user_ID = ".$_SESSION['ID']."";
                        $medicine_result = mysqli_query($con, $medicine_query);

                        while($medicine_row = mysqli_fetch_array($medicine_result)){
                            echo "<li>
                                Medicine Name - ".$medicine_row['name']."<br>
                                Date Taken - ".$row['date']." ------ Time Taken - ".$row['time']."
                            </li>";
                            echo "<br>";
                        }
                    }
                }else{
                    echo "<h1>MEDICINES NOT FOUND</h1>";
                }
            ?>
        </ol>
    </main>
</body>
</html>