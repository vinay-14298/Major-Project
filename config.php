				<?php

				$hostname="testdb.ccknqz3pruo1.us-east-2.rds.amazonaws.com";
				$username= "root";
				$password= "VinayVel11";
				$database="db_evoting";

				// UserInput Test
					function test_input($data) {
					  $data = trim($data);
					  $data = stripslashes($data);
					  $data = htmlspecialchars($data);
					
					  return $data;
					}	

								

?>