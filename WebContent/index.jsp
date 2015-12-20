<?xml version="1.0" encoding="ISO-8859-1" ?>
<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Login</title>
<style>
.container {
  border: 1px solid #CCC;
  width: 420px;
  margin: 0px auto;
  margin-top: 150px;
  padding: 15px;
  border-radius: 5px;
}
.header,
.failure {
  padding: 15px;
  width: 400px;
  border-radius: 4px;
  margin: 0px auto;
  margin-top: 15px;
  margin-bottom: -65px;
}

.header {
  border: 1px solid green;
  color: green;
  box-shadow: 0px 0px 5px rgba(0, 128, 0, 0.42);
}

.failure {
  border: 1px solid #800000;
  color: #800000;
  box-shadow: 0px 0px 5px rgba(128, 0, 0, 0.42); 
}

label {
  display: block;
  font-weight: bold;
  color: #808080;
}

input {
  width: 95%;
  padding: 8px 12px;
  border: 1px solid #CCC;
  border-radius: 4px;
  margin: 10px 0px;
}

input[type="submit"] {
  width: 100%;
  background-color: green;
  color: white;
}

.form-footer {
  font-size: 1em;
  text-align: center;
}
}
</style>
</head>
<body>
<div class="container">
<form action="MyServlet">
<label>Name: </label>
<input type="text" name="username" required/>
<label>Password: </label>
<input type="password" name="userpass" required/>
<input type="submit" value="Send"/>

</form>
<div class="form-footer">
<!-- <p><a href="SignUp.php">Register for an Account</a></p> -->
</div>
</div>
</body>
</html>