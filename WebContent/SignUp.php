<html>
<head>
	<title>PHP Form validation</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<form action="process.php" method="POST">
		<label>Name</label>
		<input type="text" name="name" required="required">
		<label>Address</label>
		<textarea name="address" rows="4"></textarea>
		<label>Education</label>
		<select name="education">
			<option value=""></option>
			<option value="diploma">Diploma</option>
			<option value="graduate">Graduate</option>
			<option value="post_graduate">Post Graduate</option>
			<option value="doctrate">Doctrate</option>
		</select>
		<label for="male">Male</label>
		<input type="radio" id="male" name="gender" value="male">
		<label for="female">Female</label>
		<input type="radio" id="female" name="gender" value="female">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>