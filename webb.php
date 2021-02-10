<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="webb.php" method="POST">
<input type="text" name="email">
<input type="submit" value ="send">
</form>


<?php
$email = $_POST["email"];

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email is a valid email address");
} else  {
  echo("$email is not a valid email address");
}

?>

</body>
</html> 

