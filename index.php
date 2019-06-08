<!DOCTYPE html>
<html lang = "de">
<head>
    <meta charset="UTF-8">
    <title>SY NIKE</title>
    <meta name="description" content="Kurzbeschreibung">
</head>
<body>
<h1>Status</h1>
Gleich folgt der PHP-Teil: <br /><br />
<?php

$servername = "localhost";
$username = "usrnike";
$password = "password";
$database = "synike";

try {
    $dsn = "mysql:dbname=synike;host=127.0.0.1";	
    $conn = new PDO($dsn, $username, $password);

    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ("Connection successfully \n <br />" . PHP_EOL);

    $sql = "select record_temperature from synike where record_datatime = (select max(record_datatime) from synike)";

    echo "<table border = \"1\">";	
    foreach ($conn->query($sql) as $row) {
	    echo "<tr>";
	    echo "<td>".$row['record_id']."</td>";
	    echo "<td>".$row['record_datatime']."</td>";
	    echo "<td>".$row['record_temperature']."</td>";
	    echo "</tr>";
    }
    echo "</table>";

}

catch(PDOException $e)
    {
            echo("Connection failed: " . $e->getMessage());
            echo("Connection failed: <br />");
    }

$conn = null;

echo("Connection closed \n<br />". PHP_EOL);

/*
echo("servername: $servername \n <br />" . PHP_EOL);
echo("username: $username \n <br />" . PHP_EOL);
echo("password: $password \n <br />" . PHP_EOL);
echo("Erfolg: es wurde ordnungsgemäß mit MySQL verbunden! Die Datenbank \"$database\" ist toll!\n <br />" . PHP_EOL);

phpinfo();
 */

?>
<br />
Das war der PHP-Teil!
</body>
</html>
