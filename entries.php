<pre>
<?php
$dsn = "mysql:host=localhost;dbname=entries";
$user = "root";
$password = "";
$pdo = new PDO($dsn, $user, $password);

echo "<h2> Users! </h2>";

$stm = $pdo->query("SELECT id, name, email, message FROM entries");


while ($row = $stm->fetch()) {
    echo $row['id'] . " " . $row['name'] . " " . $row['email'] . " " . $row['message'] . "<br />";
}
?>
</pre>

<form method="post" action="handleComment.php">
<input type="text" placeholder="Insert name..." name="name" /><br />
<input type="text" placeholder="Insert email..." name="email" /><br />
Comment: <br>
<textarea type="password" placeholder="message" name="message" > </textarea> <br />
<input type="submit" value="Send message!" />
</form>