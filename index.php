<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>This is Lazada</title>
</head>
<body>
  Registration
  <form method="POST" action="addprocess.php">
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Enter your name" />
    <br/><br/>
    <label for="address">Address</label>
    <textarea name="address" placeholder="Enter your address"></textarea>
    <br><br>
    <label for="dateofbirth">Birthday</label>
    <input type="date" name="dateofbirth">
    <input type="submit" name="save" value="Save">
  </form>
</body>
</html>