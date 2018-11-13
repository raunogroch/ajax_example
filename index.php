<?php 
	include("./database.php");
	$sql = "SELECT * FROM pais";
	$paises = $conn->query($sql);
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<select class="countries form-control" name="paises">
					<option value="">Seleccione un pais</option>
					<?php foreach ($paises as $pais) : ?>
						<option value="<?php echo $pais['id'] ?>"><?php echo $pais['name'] ?></option>
				  	<?php endforeach ?>
				</select>
			</div>
		</div>
	</div>
	
	<div class="submenu container"></div>

	<script src="assets/action.js"></script>
</body>
</html>
