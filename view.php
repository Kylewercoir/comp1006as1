<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Rankings</title>
</head>
<body>
    <h2>UFC Fighter Rankings</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Fighter</th>
            </tr>
        </thead>
        <tbody>
           <?php 
            $sql = "SELECT * FROM FIGHTERS";
            $cmd = $db->prepare($sql);
            $cmd->execute(); 
            $FIGHTERS = $cmd->fetchAll();
        
           if ($result->num_rows > 0) {
            while ($row = $result->fetech_assoc()) {
                echo "<tr><td>" . $row["rank"] . "</td><td>" . $row["fighter_name"] . "</td></tr>";
            }
           } else {
            echo "<tr><td> colspan='2'>No rankings available.</td></tr>";
           }
           ?>
        </tbody>
    </table>
    
</body>
</html>