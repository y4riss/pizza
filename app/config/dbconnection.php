<?php
 # connect to the database
 $con = mysqli_connect("db","root","passroot","pizza_data");
 if(!$con)
 {
     echo "error". mysqli_connect_error();
 }

?>
