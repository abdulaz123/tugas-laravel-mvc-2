<!DOCTYPE html>
<html>
<head>
<title>Welcome - SanberBook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.div {
width:600px;
margin:auto;
border:solid 2px;
padding:20px;
border-radius:30px;
}
</style>
</head>
<body>
<div class="div">
<h1>Selamat Datang {{ $data->firstname}} {{ $data->lastname}}</h1>
<h3>Terimakasih telah bergabung di SanberBook. Social Media kita bersama!</h3>
</div>
</body>
</html>