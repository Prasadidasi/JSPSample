<html>
<head>
	<title>PHP form Validation</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php  
	
	/* 
	 * Function to test whether a form field was set or not 
	 * Returns true - if form field was set
	 * Returns false - if form field was empty
	*/
	function has_presence($value) {
		$value = trim($value);   /* Remove any leading or trailing white spaces*/
		if(isset($value) && !empty($value))
			return true;
		else
			return false;
	}

	$errors = array();    /*All errors will be stored in this array*/

	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];
		$education = $_POST['education'];
		$address = $_POST['address'];
		$gender = '';											/*Because the radio input field is not set if any option is not selected*/
		if(isset($_POST['gender']))
			$gender = $_POST['gender'];

		if(!has_presence($name))
			array_push($errors, "Name can't be blank");
		else if(!preg_match('/^[A-Za-z ]{3,}$/', $name))
			array_push($errors, "Invalid entry in name");		


		if(!has_presence($address))
			array_push($errors, "Address can't be blank");
		else if(!preg_match('/^[a-zA-Z0-9\s,\'-]+$/', $address))
			array_push($errors, "Invalid entry in address");

		if(!has_presence($gender))
			array_push($errors, "Please select a gender");
		else if($gender != 'male' && $gender != 'female')
			array_push($errors, "Please select a Valid gender");

		if (!has_presence($education)) 
			array_push($errors, "Please select a education type");		

		if(!empty($errors)) {   /*If there are any errors print them else display the data*/
			echo "<p class='failure'>There were some errors while processing form</p>";
			echo "<ul class='failure'>";
			foreach ($errors as $error_value) {
				echo "<li>" . $error_value . "</li>";
			}
		}
		else {    /*Display the form input*/
?>
			<p class='success'>Form Submission successfull</p>
			<table>
				<tr>
					<th>Form Field</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>Name</td>
					<td><?php echo $name; ?></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><?php echo $address; ?></td>
				</tr>
				<tr>
					<td>Education</td>
					<td><?php echo $education; ?></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td><?php echo $gender; ?></td>
				</tr>
			</table>
<?php 
		}

	}

?>

</body>
</html>