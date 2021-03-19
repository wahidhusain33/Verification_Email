<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Verification</title>
</head>
<body>
<form action="sms.php" method="POST" id="login">
    Name:
    <input type="text" name="user1" id="user" placeholder="User Name"><br>

    Mobile Number:
    <input type="number" name="num1" id="num1" placeholder="Number"><br><br>
    <input type="submit" name="sub" id="sub" value="Submit">
    </form>


</body>
</html>