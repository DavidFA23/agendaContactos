<?php 
$idContacto = $datos[0]['id_contacto'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno']; 
$materno = $datos[0]['materno']; 
$telefono = $datos[0]['telefono']; 
$email = $datos[0]['email'];
$id_categoria = $datos[0]['id_categoria'];
$fecha = $datos[0]['fecha'];
?>
<?php
        
        $mysqli = new mysqli("127.0.0.1", "root", "", "agendas", 3307);
        if ($mysqli->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }

        echo $mysqli->host_info . "\n";
        ?>
<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Contactos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="css/estilo.css"> 
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
</head>
<body>
	
		<h1>Actualizar Contacto</h1>
		<div class="container">
        <div class="row">
			<div class="col-sm-8">
					
					<hr>
					<form method="POST" action="<?php echo base_url().'/actualizarContacto' ?>">
						<input type="text" id="idContacto" name="idContacto" hidden="idContacto" value="<?php echo $idContacto ?>">
						<label> Nombre </label>
						<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
						<label> Apellido Paterno </label>
						<input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $paterno ?>">
						<label> Apellido Materno </label>
						<input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno ?>">
						<label> Telefono </label>
						<input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $telefono ?>">
						<label> E-mail </label>
						<input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
						<label> Fecha </label>
						<input type="DATE" name="fecha" id="fecha" class="form-control" value="<?php echo $fecha ?>">
						<label>Categoria</label>
						<select name="id_categoria" id="id_categoria" class="form-control">
							<?php
							$query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categorias");
							while ($valores = mysqli_fetch_array($query)) {?>
								<option value="<?php echo $valores[0]?>"><?php echo $valores[1]?></option>
							<?php }?>
						</select>
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