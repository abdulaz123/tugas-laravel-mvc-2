<!DOCTYPE html>
<html>
<head>
<title>Sign up</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.div {
width:300px;
margin:auto;
border:solid 2px;
padding:20px;
border-radius:30px;
}
</style>
</head>
<body>
<div class="div">
<h2>Buat Akun Baru!</h2>
<b>Sign Up Form</b><br><br>
<form action="/welcome" method="post">
	{{ csrf_field() }}
	<label for="fname">First name:</label><br><br>
	<input type="text" id="fname" name="firstname"><br><br>
	<label for="lname">Last name:</label><br><br>
	<input type="text" id="lname" name="lastname"><br><br>
	<p>Gender:</p>
	<input type="radio" id="male" name="gender" value="male">
	<label for="male">Male</label><br>
	<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label><br>
	<input type="radio" id="other" name="gender" value="other">
	<label for="other">Other</label>
	<p>Nationality:</p>
	<select name="nationality" id="nationality">
		<option value="Indonesia">Indonesian</option>
		<option value="Malaysia">Malaysia</option>
		<option value="Singapore">Singapore</option>
		<option value="Thailand">Thailand</option>
		<option value="India">India</option>
	</select><br><br>
	<p>Language Spoken:</p>
	<input type="checkbox" id="indonesian" name="language" value="indonesian">
	<label for="indonesian">Bahasa Indonesia</label><br>
	<input type="checkbox" id="english" name="language" value="english">
	<label for="english">English</label><br>
	<input type="checkbox" id="Japanese" name="language" value="japanese">
	<label for="other">Japanese</label><br><br>
	<p>Bio:</p><br>
	<textarea name="biodata" style="width:300px; height:200px;"></textarea><br>
	<input type="submit" value="Sign UP">
</form>
</div>
</body>
</html>