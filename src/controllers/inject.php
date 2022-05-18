<?php
$query  = "SELECT id, name, inserted, size FROM products
           WHERE size = '$size'";
$result = odbc_exec($conn, $query);
?>

The attacker can combine the static part of the query with another SELECT statement that will reveal all passwords:

'
union select '1', concat(uname||'-'||passwd) as name, '1971-01-01', '0' from usertable;
--
