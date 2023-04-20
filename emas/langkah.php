<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emas</title>
</head>
<body>
    <?php
		// cek apabila tombol submit sudah ditekan
		if(isset($_POST['submit'])) {
			// ambil nilai berat dan harga dari form
			$berat = $_POST['berat'];
			$harga = $_POST['harga'];

			// hitung total harga
			$total_harga = $berat * $harga;

			// tampilkan total harga
			echo "<br><br>Total Harga Yang Harus Anda Bayar Ketika Membeli Kisaran: Rp. " . $total_harga, ',', '.';
		}
	?>
</body>
</html>