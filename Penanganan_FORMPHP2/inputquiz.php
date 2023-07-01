<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
	<h2>Form Input</h2>
	<form method="post" action="submit.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br><br>
		
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required><br><br>
		
		<label for="website">Website:</label>
		<input type="text" name="website" id="website"><br><br>
		
		<label for="comment">Comment:</label>
		<textarea name="comment" id="comment" rows="5" cols="30" required></textarea><br><br>
		
		<label for="gender">Gender:</label>
		<input type="radio" name="gender" id="gender" value="female" required> Female
		<input type="radio" name="gender" id="gender" value="male"> Male<br><br>
		
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>
