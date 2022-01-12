
<?php

// Before running, create the table:
//   CREATE TABLE MYTABLE (col1 NUMBER);

$conn = oci_connect('SYSTEM', '1110210850', 'localhost/XE');

$stid = oci_parse($conn, 'INSERT INTO product_amount (col3) VALUES (123)');

oci_execute($stid); // The row is committed and immediately visible to other users

?>
