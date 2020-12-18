<?php 
    $idCategoria = $datos[0]['id_categoria'];
    $categoria = $datos[0]['categoria']; 
    $descripcion = $datos[0]['descripcion'];
    $fecha = $datos[0]['fecha'];
 ?>
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Categoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilo.css"> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="css/estilo.css"> 
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
    
</head>
</head>
<body background="">

    <h1>Actualizar categoria!</h1>
	
	<div class="formulario">
		<div class="container">
            <div class="row">
                <div class="col-sm-8">
                <form method="POST" action="<?php echo base_url().'/actualizarCategoria' ?>">
						<input type="text" id="idCategoria" name="idCategoria" hidden="idCategoria" value="<?php echo $idCategoria ?>">
						<label for="categoria">Categoria</label>
						<input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $categoria ?>">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>">
						<label for="fecha">Fecha</label>
						<input type="DATE" name="fecha" id="fecha" class="form-control" value="<?php echo $fecha ?>"><br>
                        <hr>
                        
						<button class="btn btn-success">Guardar</button>
					</form>
                </div>
            </div>
        </div>
    </div>
    <style>
        body{
            background-color: #000713;
        }
        h1,h2,h3{
            color: #eceef1;
        }
        label{
            color: #eceef1;
        }
    </style>
</body>
</html>