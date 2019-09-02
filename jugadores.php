<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/png" href="img/ico.png">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    
<h1 class="titulo">Listado</h1>


<?php 
include ('reserva/database.php');
$jugadores = new Database();
$listado=$jugadores->newread();
?>

<?php 
while ($row=mysqli_fetch_object($listado)){
$id=$row->id;
$nombre=$row->nombre;
$fecha=$row->fecha;
$parrafo=$row->parrafo;
$img=$row->img;
$enlace=$row->enlace;
$estado=$row->estado;
?>


<div class="caja">

<div class="contenedor-img">
       <img src="img/<?php echo $img; ?>" alt="">
</div>

<div class="contenedor-letra">
    <p class="nombre"><?php echo $nombre; ?></p>
    <p class="fechaNac"><?php echo $fecha; ?></p>
    <p class="parrafo"><?php echo $parrafo; ?></p>
    <a href="<?php echo $enlace; ?>">Ver más</a>
</div>

</div>


<?php



}

?>    






</body>
</html>