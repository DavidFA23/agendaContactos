<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="stylesheet" href="css/estilo.css"> 
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    
    
</head>
<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<a class="navbar-brand" href="<?php echo base_url('/principal') ?>"><i class="fa fa-cube"></i>Agenda<b>Contactos</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="<?php echo base_url('/contactos') ?>">Agenda</a></li>
			<li><a href="<?php echo base_url('/categoria') ?>">Categoria</a></li>
			
			
		</ul>
		
	</div>
</nav>
    <!--AQUI COMIENZA EL NAV-->
    
<!-- AQUI FINALIZA EL NAV....................................-->
    <div class="container">
		<h1>Registrar una categoria</h1>
		<div class="row">
			<div class="col-sm-8">
			<form method="POST" action="<?php echo base_url().'/crearCategoria' ?>">
						<label> Categoria </label>
						<input type="text" name="categoria" id="categoria" class="form-control input-sm" >
						<label> Descripcion </label>
						<input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
						<label> Fecha </label>
						<input type="DATE" name="fecha" id="fecha" class="form-control input-sm">
						<hr>
						<button class="btn btn-primary">Guardar</button>
					</form>
			</div>
        </div>
        
		<hr>
		<h2>Categorias</h2>
		
		<div class="row">
			<div class="col-sm-10">
				<div class="table table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                        <td align="center">Categoria</td>
                                        <td align="center">Descripción</td>
                                        <td align="center">Fecha</td>
                                        <td align="center">Editar</td>
                                        <td align="center">Eliminar</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($datos as $key): ?>
									<tr>
										<td align="center"><?php echo $key->categoria ?></td>
										<td align="center"><?php echo $key->descripcion ?></td>
										<td align="center"><?php echo $key->fecha ?></td>
										<td style="text-align: center">
											<a href="<?php echo base_url().'/obtenerCategoria/'.$key->id_categoria?>" class="btn btn-warning btn-sm">Editar</a>
										</td>
										<td style="text-align: center">
											<a href="<?php echo base_url().'/eliminarCategoria/'.$key->id_categoria?>" class="btn btn-danger btn-sm">Eliminar</a>
										</td>
									</tr>
								<?php endforeach; ?>
                                    </tbody>
                                    </table>
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
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript">
		$(document).ready(function() {
			$('#tablaload').DataTable();
		} );
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript">
		let mensaje = '<?php echo $mensaje ?>';

		if (mensaje =='1'){
			swal(':D','Agregado con exito','success');

		}else if(mensaje == '0'){
			swal(':(','Fallo al agregar','error');  
		}else if(mensaje == '2'){
			swal(':D','Actualizado con exito','success');  
		}else if(mensaje == '3'){
			swal(':D','Fallo al actualizar','error');  
		} else if(mensaje == '4'){
			swal(':D','Eliminado con exito','success');  
		}else if(mensaje == '5'){
			swal(':D','Fallo al eliminar','error');  
		}
	</script>
</body>
</html>