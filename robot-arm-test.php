<?php

   ini_set('display_errors', 1); // Let me learn from my mistakes.
   error_reporting(E_ALL & ~ E_NOTICE); // Don't show notices.

   //connect to databse
	 $dbc = new mysqli('localhost', 'root', 'mM123', 'robotarm');//robotarm.engines
   /*if ($dbc->connect_error) {
     echo "database connection error";
   }
   else {
     echo "database connection success<br>";
   }*/

   $query = "UPDATE engines SET state=true ORDER BY id DESC LIMIT 1;";
   $result = $dbc->query($query);

   $sql = "SELECT eng1, eng2, eng3, eng4, eng5, eng6 FROM engines ORDER BY id DESC LIMIT 1;";
   $result = $dbc->query($sql);

   if ($result->num_rows > 0) { // output data of each row
     while($row = $result->fetch_assoc()) {
       echo $row["eng1"] ."<br>". $row["eng2"]."<br>". $row["eng3"]."<br>". $row["eng4"]."<br>".$row["eng5"]."<br>". $row["eng6"]. "<br>";
     }
   } else {
     echo "0 results";
   }

   $dbc->close();
   ?>
