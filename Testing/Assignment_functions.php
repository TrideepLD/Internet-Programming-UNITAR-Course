<?php  include "db_con.php"; ?>

<?php

	function personalInfo() {

		global $connection;
		if(isset($_POST['submit'])) {	

			$fullName = $_POST['username'];
			$gender = $_POST['gender'];
			$dateOfBirth = $_POST['dob'];

			$query = "INSERT INTO personal_info(full_name, gender, date_of_birth) VALUES ($fullName, $gender, $dateOfBirth)";

			$check_query = mysqli_query($connection, $query);

			if(!$check_query) {

				die("QUERY FAILED". mysqli_error($connection));
			} else {

				echo "QUERY Record";
			}
		}

	}	


	
?>