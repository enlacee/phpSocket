<?php

mysql_connect("localhost", "root", "123456");
mysql_select_db("free_xploralog");
$rs = mysql_query("select *from slots limit 5");
var_dump($rs);

while ($row = mysql_fetch_array($rs)) {
    echo $row["slot"]; echo "<br>";
}