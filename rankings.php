<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fighters</title>
</head>
<body>]
<h1>Add Fighters</h1>
<form action="process_fighter.php" method="POST">
    <label for="name">Fighter Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="ranking">Select Ranking:</label>
    <select name="ranking_id" id="ranking"required>
        <?php
         include 'DB.php';
         $sql = "SELECT * FROM rankings";
         $result = $conn->query($sql);
         while ($row = $result->fetch_asssssoc()) {
            echo "<option value='" . $row['ranking_id'] . "'>" . $row['ranking_name'] . "<option>";
         }
         ?>
          </select>
          <br><br>
          <input type="submit" value="Register Fighter">
          </form>
          
            
          </body>
          </html>

