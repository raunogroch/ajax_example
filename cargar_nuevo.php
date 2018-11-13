<?php 
	include("./database.php");
	$sql = "SELECT * FROM departamentos WHERE pais_id = ".$_POST['id'];
	$departamentos = $conn->query($sql);
	mysqli_close($conn);
?>
<br>
<?php if ($departamentos): ?>
	<select class="states form-control" name="departamentos">
		<option value="">Seleccione una ciudad</option>
		<?php foreach ($departamentos as $departamento) : ?>
			<option value="<?php echo $departamento['id'] ?>"><?php echo $departamento['name'] ?></option>
		<?php endforeach ?>
	</select>	
<?php endif ?>
