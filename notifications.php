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
    <title>Medicine Page</title>
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

    <p>
        See the medicines that you have taken completely, and those that you are still taking
    </p>

    <!-- Table to view all recorded medicines and dosages -->
    <table border="1">
        <thead>
            <th>No</th>
            <th>MEDICINE NAME</th>
            <th>COMPLETED</th>
            <th>DAYS LEFT</th>
            <th>AMOUNT TAKEN</th>
            <th>AMOUNT TO TAKE TODAY</th>
            <th>ACTION</th>
        </thead>

        <tbody>
            <?php
                $query = "SELECT * FROM medicine WHERE user_ID = ".$_SESSION['ID']."";
                $result = mysqli_query($con, $query);

                if($result){
                    $count = 1;
                    while($row = mysqli_fetch_array($result)){
                        $days_left = $row['dosage_quantity'] / $row['frequency_quantity'];
                        $daily_amount = $row['frequency_quantity'] - $row['daily_amount'];
                        if($row['dosage_quantity'] == $row['amount_taken']){
                            echo "<tr><td>$count</td>
                                    <td>".$row['name']."</td>
                                    <td>YES</td>
                                    <td>".round($days_left)."</td>
                                    <td>".$row['amount_taken']."</td>
                                    <td>".$daily_amount."</td>
                                    <td><a href='dosage.php?id=".$row['ID']."'>Update Dosage</a></td>
                                </tr>
                            ";
                        }else{
                            echo "<tr><td>$count</td>
                                    <td>".$row['name']."</td>
                                    <td>N0</td>
                                    <td>".round($days_left)."</td>
                                    <td>".$row['amount_taken']."</td>
                                    <td>".$daily_amount."</td>
                                    <td><a href='dosages.php?id=".$row['ID']."'>Update Dosage</a></td>
                                </tr>
                            ";
                        }
                        $count += 1;
                    }
                }else{
                    echo "<h1>MEDICINES NOT FOUND</h1>";
                }
            ?>
        </tbody>
    </table>


</body>
</html>