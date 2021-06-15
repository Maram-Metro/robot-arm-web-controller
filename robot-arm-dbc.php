<?php
   $Eng1 = $_POST['eng1'];
   $Eng2 = $_POST['eng2'];
   $Eng3 = $_POST['eng3'];
   $Eng4 = $_POST['eng4'];
   $Eng5 = $_POST['eng5'];
   $Eng6 = $_POST['eng6'];

   //connect to databse
	 $dbc = new mysqli('localhost', 'root', 'mM123', 'robotarm');//robotarm.engines
   /*if ($dbc->connect_error) {
     echo "database connection error";
   }
   else {
     echo "database connection success<br>";
   }*/

   $query = "INSERT INTO engines(eng1, eng2, eng3, eng4, eng5, eng6, state) VALUES ('$Eng1', '$Eng2', '$Eng3', '$Eng4', '$Eng5', '$Eng6', false)";

   $result = $dbc->query($query);

   $dbc->close();
   ?>
