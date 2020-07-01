<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>
	<h2>Sign Up Form</h2>
	<!-- form -->
	<form action="/welcome" method="POST" >
        @csrf 
		<!-- form nama -->
		<label for="firstname">First name:</label>
		<br>
		<br>
		<input type="text" id="Firstname" name="firstname">
		<br>
		<label for="lastname" >Last name:</label>
		<br>
		<br>
		<input type="text" id="lastname" name="lastname">
		<br>
		<!-- akhir form nama -->

		<!-- form gender -->
		<br>
		<label >Gender:</label>
		<br>
		<br>
		<input type="radio" id="male" name="gender"> <label for="male">Male</label>
		<br>
		<input type="radio" id="female" name="gender"> <label for="female">Female</label>
		<br>
		<input type="radio" id="other" name="gender"> <label for="female">Other</label>
		<br>
		<!-- akir form gender -->

		<!-- form nationality -->
		<br>
		<label for="nationality">Nationality:</label>
		<br>
		<br>
		<select name="" id="nationality">
			<option value="">Indonesian</option>
			<option value="">Malaysian</option>
			<option value="">Rusian</option>
			<option value="">American</option>
			<option value="">Other</option>
		</select>
		<br>
		<!-- akhir form nationality -->


		<!-- form language -->
		<br>
		<label for="">Language Spoken:</label>
		<br>
		<input type="checkbox" id="indonesian"><label for="indonesian">Indnesian</label>
		<br>
		<input type="checkbox" id="english"><label for="english">English</label>
		<br>
		<input type="checkbox" id="other"><label for="other">Other</label>
		<br>
		<!-- akhir form languge -->

		<!-- form bio -->
		<br>
		<label for="bio">Bio:</label>
		<br>
		<textarea  cols="30" rows="10"> </textarea>
		<br>
		<!-- akhir form bio -->

		<!-- submit -->
		<input type="submit" value="Sign Up">
		<!-- akhir submit -->
	</form>
	
</body>
</html>