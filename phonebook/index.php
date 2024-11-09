<?php
include "db.php";

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
</head>
<body>
    <h2>Phonebook</h2>

    <table border="1">
        <tr>
            <th>Name</th>   
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php
        if($result->num_row >0){
            while($row = $insult->fetch_assoc()){
                echo "<tr>";
                echo "<tr>" . $row['name'] . "</td>";
                echo "<tr>" . $row['phone'] . "</td>";
                echo "<tr>Delete </td>";
            }
        }
        else{
            echo "<tr></td colspan='3'>No Contacts</td><tr>";
        }
        ?>
</body>
</html>