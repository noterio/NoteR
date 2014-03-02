<?php
// we connect to example.com
// don't edit this.
$link = mysql_connect('example.com', 'mysql_user', 'mysql_password');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
$con = $link;
mysql_close($link);

?>
