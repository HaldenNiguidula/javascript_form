<!DOCTYPE html>
<html lang="en">
<style>
    fieldset{
        background-color: burlywood;
    }
    
    legend{
        background-color: #fefefe;
    }

    input{
        align
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="action_page.php" method="POST">
  <fieldset>
    <legend class id="Per">Personalia:</legend>
        <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
        <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>
        <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="birthday"><br><br>
    <input type="submit" value="Save Record" name="submit_record">
  </fieldset>
</form>
</body>
</html>