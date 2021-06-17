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
        <?php
            if($_SESSION['email'] != ""){
                echo strtoupper("<h1>WELCOME ".$_SESSION['name']."</h1>");
            }
        ?>
        <a href="index.php">Home</a> | 
        <a href="add_medicine.php">Add Medicine</a> | 
        <a href="notifications.php">Notifications</a> | 
        <a href="dosage_list.php">Dosage</a> |
        <a href='logout.php'>Logout</a>
    </header>

    <!-- Table to view all recorded medicines and dosages -->
    <table border="1">
        <thead>
            <th>No</th>
            <th>MEDICINE NAME</th>
            <th colspan="2">ACTIONS</th>
        </thead>

        <tbody>
            <?php
                $query = "SELECT * FROM medicine WHERE user_ID = ".$_SESSION['ID']."";
                $result = mysqli_query($con, $query);

                if($result){
                    $count = 1;
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr><td>$count</td>
                                <td>".$row['name']."</td>
                                <td><a href='edit_medicine.php?id=".$row['ID']."'>EDIT</a></td>
                                <td><a href='delete_medicine.php?id=".$row['ID']."'>DELETE</a></td>
                            </tr>
                        ";
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