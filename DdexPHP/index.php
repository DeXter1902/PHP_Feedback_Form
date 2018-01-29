<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Feedback Form</title>
</head>
<body>
<h1 align="center">Feedback Form</h1>
<form action="controller.php" method="post">
	<table align="center">
	<tr><td>Student Name : </td><td><input type="text" name="studentname"></td></tr>
	<tr><td>Enrollment No. : </td><td><input type="text" name="eno"></td></tr>
	<tr><td>Branch : </td><td><input type="text" name="branch"></td></tr>
	<tr><td>Category : </td><td><input type="text" name="category"></td></tr>
	<tr><td>Message : </td><td><textarea rows="5" cols="21" name="message"></textarea></td></tr>
	<tr><td><input type="reset" value="Reset"></td><td><input type="submit" value="Submit"></td></tr>
	</table>
</form>
</body>
</html>