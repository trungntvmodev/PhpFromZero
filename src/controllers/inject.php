<?php

$offset = $argv[0]; // beware, no input validation!
$query  = "SELECT id, name FROM products ORDER BY name LIMIT 20 OFFSET $offset;";
$result = pg_query($conn, $query);


$id = $_GET['id'];
mysql_connect('localhost', $username, $password) or die('Could not connect: ' . mysql_error());
mysql_select_db('myDatabase') or die('Could not select database');

$result = mysql_query("SELECT * FROM myTable WHERE id = " . $id);  // Sensitive, could be susceptible to SQL injection

while ($row = mysql_fetch_object($result)) {
    echo $row->name;
}

?>
