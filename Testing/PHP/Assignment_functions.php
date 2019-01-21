<?php  include "db_con.php" ?>

<?php
	function personalInfo() {

		global $connection;
		if(isset($_POST['submit'])) {	

			$fullName = $_POST['username'];
			$HomeAdress = $_POST['homeAdress'];
			$Gender = $_POST['gender'];
			$DateOfBirth = $_POST['dob'];
			$query = "INSERT INTO personal_info(full_name, home_address, gender, date_of_birth) VALUES ('$fullName', '$HomeAdress', '$Gender', '$DateOfBirth')";
			$check_query = mysqli_query($connection, $query);

			if(!$check_query) {

				die("QUERY FAILED". mysqli_error($connection));
				
			} else {

				echo "QUERY Record";
			}
		}

	}

	function contactInfo() {
		
		global $connection;
		if(isset($_POST['submit'])) {	
		
			$email = $_POST['usermail'];
			$personalNum = $_POST['phoneNumber'];
			$emergencyContact = $_POST['emergency'];
			$query = "INSERT INTO contact_info(email, personal_contact, emergency_contact) VALUES ('$email', '$personalNum', '$emergencyContact')";
			$check_query = mysqli_query($connection, $query);
			if(!$check_query) {
				die("QUERY FAILED". mysqli_error($connection));
			} else {
			
				echo "QUERY Record";
				}
		}
		
	}

	function educationalBackground() {
			
					global $connection;
					if(isset($_POST['submit'])) {	
			
						$HighCert = $_POST['high_certifcate'];
						$HighCgpa = $_POST['high_cgpa'];
						$PreCert = $_POST['pre_certifcate'];
						$PreCgpa = $_POST['pre_cgpa'];
						$UniOfX = $_POST['UniOfX'];
						$CourseTitle = $_POST['course'];						
						$UndCgpa = $_POST['und_cgpa'];
						$query = "INSERT INTO contact_info(highschool_cert, highschool_cgpa, preu_cert, preu_cgpa, undergrad_uni, undergrad_course, undergrad_cgpa )
						$query .= VALUES ('$HighCert', '$HighCgpa', '$PreCert', '$PreCgpa', '$UniOfX', '$CourseTitle', '$UndCgpa')";
			
						$check_query = mysqli_query($connection, $query);
			
						if(!$check_query) {
			
							die("QUERY FAILED". mysqli_error($connection));
						} else {
			
							echo "QUERY Record";
						}
					}
			
				}	
?>