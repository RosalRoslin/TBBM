<?php

	 $DBhost = "127.0.0.1";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "thebigbeachmarathon";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
