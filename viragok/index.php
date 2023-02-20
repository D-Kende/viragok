<!DOCTYPE html>
<html>
<head>
	<title>Virág feltöltése</title>
</head>
<body>
	<h2>Virág feltöltése</h2>

	<?php
	// A feltöltött kép elmentése
	if(isset($_POST['submit'])) {
		$file_name = $_FILES['file']['name'];
		$file_tmp = $_FILES['file']['tmp_name'];
		move_uploaded_file($file_tmp, "uploads/" . $file_name);
		echo "<p>A kép sikeresen feltöltve.</p>";
	}

	// A feltöltött képek megjelenítése
	$directory = "uploads/";
	$files = glob($directory . "*");

	foreach($files as $image) {
		echo "<img src='$image' width='200' height='200' style='margin: 10px;'>";
	}
	?>

	<!-- A feltöltés űrlapja -->
	<form action="" method="POST" enctype="multipart/form-data">
		<label for="file">Válassz ki egy képet:</label>
		<input type="file" name="file" id="file"><br>
		<input type="submit" name="submit" value="Feltöltés">
	</form>
</body>
</html>
