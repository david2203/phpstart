<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<pre> 
<form action="stringfunktioner.php" method="POST">
<input type="text" name="textruta" placeholder="text">
<textarea name="textarea" placeholder="massa text"></textarea>
<select name="cars" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>
Blue pill<input value ="blue pill" type="radio" id="blue pill" name="radio button">
Red pill<input value ="red pill" type="radio" id="red pill" name="radio button">
Married?:<input value ="married" type="checkbox" name="check married">
Children?:<input value ="children" type="checkbox" name="check children">
<input type="color" name="colorpicker">
<input type="submit" value="skicka">
</pre>

<pre>
<?php
  print_r($_POST);
?>
</pre>

</form>
</body>
</html>