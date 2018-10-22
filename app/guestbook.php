<?php

$con = mysqli_connect("mysql","root","6e0N1EDE0Nb","guestbook");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT title FROM entry";
$result = $con->query($query);
while($row = $result->fetch_array())
{
    echo $row['message'];
    echo "<br />";
}