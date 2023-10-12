<?php
$con = mysqli_connect("localhost", "root", "7427646", "myhmsdb");
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>