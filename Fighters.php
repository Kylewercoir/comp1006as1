<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Fighters</title>
</head>
<body>]
<h2>UFC Fighter Ranking Form</h2>
    <form method="POST" action="view.php">
    <label for="Fighter">Select Fighter:</label>
    <select name="Fighter_id" id="Fighter" reguired>
     <option value="">Select a Fighter</option>
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
