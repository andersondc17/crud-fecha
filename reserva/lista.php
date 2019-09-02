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

<?php 
include ('database.php');
$clientes = new Database();
$listado=$clientes->read();
$listado2=$clientes->newread();
?>

    <div class="container col-sm-6">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Jugadores Completos</b></h2></div>
                    <div class="col-sm-4">
                        <br>
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar Jugador</a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Fechas</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                 
                <tbody>    


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
<tr>
<td><?php echo $nombre;?></td>
<td><?php echo $fecha;?></td>
<td>
<a href="update.php?id=<?php echo $id;?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
<a href="delete.php?id=<?php echo $id;?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
</td>
</tr>	
<?php
}
?>                </tbody>
            </table>
        </div>
    </div> 
    
    




    <div class="container col-sm-6">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Jugadores futuros</b></h2></div>
                   
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Fechas</th>
                
                    </tr>
                </thead>
                 
                <tbody>    
                
<?php 
while ($row=mysqli_fetch_object($listado2)){
    $id=$row->id;
    $nombre=$row->nombre;
    $fecha=$row->fecha;
    $parrafo=$row->parrafo;
    $img=$row->img;
    $enlace=$row->enlace;
    $estado=$row->estado;
    ?>
<tr>
<td><?php echo $nombre;?></td>
<td><?php echo $fecha;?></td>

</tr>	
<?php
}
?>                </tbody>
            </table>
        </div>
    </div> 









    
</body>
</html>