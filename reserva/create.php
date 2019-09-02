<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="icon" type="image/png" href="img/ico.png">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Jugador</b></h2></div>
              
                </div>
            </div>
            <?php
				include ("database.php");
				$jugadores= new Database();
				if(isset($_POST) && !empty($_POST)){
					$nombre = $jugadores->sanitize($_POST['nombre']);
					$fecha = $jugadores->sanitize($_POST['fecha']);
					$parrafo = $jugadores->sanitize($_POST['parrafo']);
					$img = $jugadores->sanitize($_POST['img']);
					$enlace = $jugadores->sanitize($_POST['enlace']);
					$estado = $jugadores->sanitize($_POST['estado']);
					
					$res = $jugadores->create($nombre, $fecha, $parrafo, $img, $enlace, $estado);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
					}else{
						$message="No se pudieron insertar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>
			<div class="row">
				<form method="post">


				<div class="col-md-6">
					<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>fecha:</label>
					<input type="date" name="fecha" id="fecha" class='form-control' maxlength="100" required>
				</div>
				<div class="col-md-12">
					<label>parrafo:</label>
					<textarea  name="parrafo" id="parrafo" class='form-control' maxlength="255" required></textarea>
				</div>
				<div class="col-md-12">
					<label>img:</label>
					<textarea  name="img" id="img" class='form-control' maxlength="255" required></textarea>
				</div>
				<div class="col-md-6">
					<label>enlace:</label>
					<input type="text" name="enlace" id="enlace" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-6">
					<label>estado:</label>
					<input type="text" name="estado" id="estado" class='form-control' maxlength="64" required>
				</div>
				



				<div class="col-md-12 pull-right">
				<hr>
					<a href="lista.php" class="btn btn-primary">Regresar</a>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>