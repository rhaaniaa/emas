<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Program Menghitung Harga Emas</h1>
	<form method="post" action="langkah.php">
		<label>Berat Emas (gram):</label>
		<input type="number" name="berat" value="1" min="1">
		<br><br>
		<label>Harga Emas Pasar Saat Ini (per gram):</label>
		<input type="number" name="harga" value="750000" min="1">
		<br><br>
		<input type="submit" name="submit" value="Hitung Harga">
	</form>
</body>
</html>