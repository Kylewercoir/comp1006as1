<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UFC Fighter Ranking Form</title>
</head>
<body>
    <!-- form to capture user inputs --> 
     <h1>Add Fighters</h1>
<form action="Fighters.php" method="POST">
    <label for="name">Fighter Name:</label>
    <input type="text" id="name" name="name" required><br><br>
     <?php 
     // populate the dropdown 
     if ($result->num_rows > 0) {
        while($row = $result->fetech_assoc()) {
            echo "<option value='" . $row["Fighter_id"] . "'>" . $row["Fighter_name"] . "</option>";
        }
     }
     ?>
    </select>
    <br><br>
    <!-- rank field validation -->
     <label for="Rank">Rank (1-15):</label>
     <input type="number" name="Rank" id="Rank" min="1" max="15" reguired>
     <br><br>

     <input type="submit" value="Submit">
        </form>
</body>
</html>

