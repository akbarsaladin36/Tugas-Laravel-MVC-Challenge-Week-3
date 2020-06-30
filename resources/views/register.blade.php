<!DOCTYPE html>
<html>
<head>
	<title>Form Sign Up - Sanberbook</title>
</head>
<body>

	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	<form action="/welcome2" method="GET">
		<label>First Name:</label>
			<br>
			<br>
			<input type="text" name="namadepan">
			<br>
			<br>
		<label>Last Name:</label>
			<br>
			<br>
			<input type="text" name="namabelakang">
			<br>
			<br>
		<label>Gender:</label>
			<br>
			<br>
			<td>
			<tr><label for="gender"><input type="radio" value="male" name="gender">Male</label></tr>
			<br>	
			<tr><label for="gender"><input type="radio" value="female" name="gender">Female</label></tr>
			<br>	
			<tr><label for="gender"><input type="radio" value="other" name="gender">Other</label></tr>
			</td>
			<br>
			<br>
		<label>Nationality:</label>
			<br>
			<br>
		<select name="nationality">
			<option value="indonesian">Indonesian</option>
			<option value="malaysian">Malaysian</option>
			<option value="singapore">Singapore</option>
			<option value="australian">Australian</option>
		</select>
			<br>
			<br>
		<label>Language Spoken:</label>
			<br>
			<br>
			<label for="language"><input type="checkbox" name="language" value="bahasaindonesia">Bahasa Indonesia</label>
			<br>
			<label for="language"><input type="checkbox" name="language" value="english">English</label>
			<br>
			<label for="language"><input type="checkbox" name="language" value="other">Other</label>
			<br>
			<br>
		<label>Bio:</label>
			<br>
			<br>
			<textarea name="bio" style="width: 171px; height: 65px;"></textarea>
			<br>
		<input type="submit" value="Sign Up" name="signup">
	</form>

</body>
</html>