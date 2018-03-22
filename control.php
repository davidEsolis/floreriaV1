<?php

include('php/conectAndChart.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="css/vista.css">
    <link rel="stylesheet" href="css/sliderr.css">
     <link rel="stylesheet" href="css/menu.css">
     <link rel="stylesheet" href="css/banner.css">
     <link rel="stylesheet" href="css/blog.css">
     <link rel="stylesheet" href="css/info.css">
     <link rel="stylesheet" href="css/bienve.css">
     <link rel="stylesheet" href="css/modales.css">
     <link rel="stylesheet" href="css/foto.css">
     
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Buttons DataTables -->

	
     <link href="https://file.myfontastic.com/g3LYwuYrqLK8Mz9Nf7FKeV/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Bigelow+Rules|Butterfly+Kids|Cabin+Sketch|Chicle|Cookie|Courgette|Dancing+Script|Dosis|Gloria+Hallelujah|Julius+Sans+One|Kaushan+Script|Lobster|Lobster+Two|Londrina+Sketch|Pacifico|Padauk|Poiret+One|Raleway|Roboto+Condensed|Satisfy|Sevillana|Spectral+SC|Spinnaker|Tangerine|Ubuntu+Mono|VT323" rel="stylesheet">
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <title>floreriaP</title>
</head>
<body>
    <header> 
        <div class="contenedor">
       <h1 class="font1 icon-cloud">Floreria Primavera</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-list" for="menu-bar"></label>
            <nav class="menu">
             
              <a id="m_dos"  class="menu_font icon-heart-o" href="control.php"> Control Usuarios</a>
              <a id="m_dos"  class="menu_font icon-heart-o" href="controlimage.php"> Control Imagen</a>
               <a id="m_tres"  class="menu_font icon-paperplane" href="php/cerrar.php"> Cerrar sesion</a>

            </nav>
         </div>
    </header>
    <main>
        <section id="bannner">
            <img src="img/banner_1.jpg">
            <div class="contenedor">
                <div id="baner">
                    
                <h3 class="elenco">Control de Usarios</h3>
                <h3 class="leer">Usuario: <i id="usuario_fp">Administradores</i></h3>
                </div>
            </div>
        </section>
        </div>

 <div class="row">
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ">
			<form id="reGistros" class="form-horizontal" action="" method="POST">
				
				<input type="hidden" id="idusuario" name="idusuario" value="">
				<input type="hidden" id="opcion" name="opcion" value="modificar">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombres</label>
					<div class="col-sm-8"><input id="nombre_u" name="nombre_u" type="text" class="form-control" required></div>				
				</div>
				<div class="form-group">
						<label for="Usuario" class="col-sm-2 control-label">Usuario</label>
				 <div class="col-sm-8"><input id="usuario_u" name="usuario_u" type="text" class="form-control" required></div>				
				</div>
				<div class="form-group">
					<label for="clave" class="col-sm-2 control-label">Contraseña</label>
					<div class="col-sm-8"><input id="clave_u" name="clave_u" type="text" class="form-control" required></div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<button type="submit" id="insertarFp" class="btn btn-primary">Insertar</button>
						<input id="" type="submit" class="btn btn-primary" value="Guardar">
						<input id="btn_listar" type="button" class="btn btn-primary" value="Refrescar">
					</div>
				</div>
			</form>
		<div class="col-sm-offset-2 col-sm-8">
			<p class="mensaje"></p>
	 </div>
			
    </div>
</div> 


<!-- Parte tabla -->
    <form id="frmEliminarUsuario" action="" method="POST">
	<input type="hidden" id="idusuario" name="idusuario" value="">
	<input type="hidden" id="opcion" name="opcion" value="eliminar">
	<!-- Modal -->
	<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalEliminarLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="modalEliminarLabel">Eliminar Usuario</h4>
				</div>
				<div class="modal-body">							
					¿Está seguro de eliminar al usuario?<strong data-name=""></strong>
				</div>
				<div class="modal-footer">
					<button type="button" id="eliminar-usuario" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	</form>
        
           
      	<div class="row">
		<div id="cuadro1" class="col-sm-12 col-md-12 col-lg-12">
			<div class="col-sm-offset-2 col-sm-8">
				<h3 class="text-center"> <small class="mensaje"></small></h3>
			</div>
			<div class="table-responsive col-sm-12">		
				<table id="dt_cliente" class="table table-bordered table-hover" cellspacing="0" width="100%" >
					<thead>
						<tr>		
							
							<th>Nombre</th>
							<th>Usuario</th>
							<th>Contraseña</th>
							<th>Operadores</th>											
						</tr>
					</thead>					
				</table>
			</div>			
		</div>		
	</div>
</main>
      
    <footer>
        <div  class="contenedor leer">
            <p class="copy">FloreriaPrimavera &copy; 2018 Derechos Reservados</p>
            <div class="sociales">
                <a class="icon-facebook-squared" href="#"></a>
            </div>                 
        </div>
    </footer>
   <script src="js/jquery-1.12.3.js"></script>

    <script src="js/foto.js"> </script>
    <script src="js/subir_foto.js"> </script>
	 <!--botones DataTables-->
	 <script src="js/bootstrap.min.js"></script>
	 <script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.js"></script>	
	<script src="js/dataTables.buttons.min.js"></script>
	<script src="js/buttons.bootstrap.min.js"></script>
	
	<script>		
		$(document).on("ready", function(){
			listar();
			insertar();
			guardar();
			eliminar();
			
		});

		$("#btn_listar").on("click", function(){
			listar();
			limpiar_datos();
		});
		
		
		
		var guardar = function(){
			$("#reGistros").on("submit", function(e){
				e.preventDefault();
				var frm = $(this).serialize();
				console.log(frm);
			 $.ajax({ 
				method: "POST",
				url: "php/guardar.php",
				data: frm
				}).done(function(info){
				//console.log(info);
					var json_info = $.parseJSON(info);
					//console.log(json_info);
					mostrar_mensaje(json_info);
					limpiar_datos();
					listar();
				});
					//return false; //para que el formulario no se envie
				});
			}
			
		var insertar = function(){
			$("#insertarFp").on("click", function(){
				var nombre_u = $("#reGistros #nombre_u").val(),
				usuario_u = $("#reGistros #usuario_u").val(),
				clave_u = $("#reGistros #clave_u").val();				
			 $.ajax({ 
				method: "POST",
				url: "php/insertar.php",
				data: {"nombre_u": nombre_u, "usuario_u": usuario_u, "clave_u": clave_u}
				}).done(function(info){
				//console.log(info);
					var json_info = $.parseJSON(info);
					console.log(json_info);
					mostrar_mensaje(json_info);
					limpiar_datos();
					listar();
				});
					//return false; //para que el formulario no se envie
				});
			}
		
		var eliminar = function(){
		           $("#eliminar-usuario").on("click", function(){
		 		 var idusuario = $("#frmEliminarUsuario #idusuario").val(),
		 		 opcion = $("#frmEliminarUsuario #opcion").val();
		 	   $.ajax({
		 		      method:"POST",
		 		      url: "php/guardar.php",
		 		      data: {"idusuario": idusuario, "opcion": opcion}
		 		 
		 		 }).done(function(info){
		 		       var json_info = $.parseJSON(info);
		 		     
		 		       mostrar_mensaje(json_info);
		 		       limpiar_datos();
		 		       listar();
		 	    });	
		 	});
		      }
		
		
			
			var limpiar_datos = function(){
				$("#opcion").val("modificar");
				$("#idusuario").val("");
				$("#nombre_u").val("").focus();
				$("#usuario_u").val("");
				$("#clave_u").val("");
			}

		var listar = function(){
			var table = $("#dt_cliente").DataTable({
				"destroy": true,
				"ajax":{
					"method": "POST",
					"url": "php/listar.php"
					},
					"columns":[
					{"data":"nombreUsrsFp"},
					{"data":"usuarioUsrsFp"},
					{"data":"contraUsrsFp"},
					{"defaultContent": "<button type='button' class='editar btn btn-primary'>Editar</button><button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar'>Eliminar</button>"}
					],
					"language": idioma_español
				});
			obtenerData("#dt_cliente tbody", table);
			obtenerIdEliminar("#dt_cliente tbody", table);
					
		}
		
		
		
		//tomar los datos en forma de arreglo despues de precionar el boton de editar
		var obtenerData = function(tbody, table){
			$(tbody).on("click", "button.editar", function(){
				var data = table.row( $(this).parents("tr")).data();
				//console.log(data); // el areglo tomado lo pasamos a las siguientes cajas
				var idusuario = $("#idusuario").val(data.idUsrsFp),
				 nomUsuario = $("#nombre_u").val(data.nombreUsrsFp),
				 userUsuario = $("#usuario_u").val(data.usuarioUsrsFp),
				 passUsuario = $("#clave_u").val(data.contraUsrsFp)
			});
		}
		
		var obtenerIdEliminar = function(tbody, table){
			$(tbody).on("click", "button.eliminar", function(){
				var data = table.row( $(this).parents("tr") ).data();
				var idusuario = $("#frmEliminarUsuario #idusuario").val(data.idUsrsFp);
			});
		}

		var mostrar_mensaje = function( informacion ){
			var texto = "", color = "";
			if( informacion.respuesta == "BIEN" ){
				texto = "<strong>Bien!</strong> Se han guardado los cambios correctamente.";
				color = "#379911";
			}else if( informacion.respuesta == "ERROR"){
				texto = "<strong>Error</strong>, no se ejecutó la consulta.";
				color = "#C9302C";
			}else if( informacion.respuesta == "EXISTE" ){
				texto = "<strong>Información!</strong> el usuario ya existe.";
				color = "#5b94c5";
			}else if( informacion.respuesta == "VACIO" ){
				texto = "<strong>Advertencia!</strong> debe llenar todos los campos solicitados.";
				color = "#ddb11d";
			}
			
			$(".mensaje").html( texto ).css({"color": color });
			$(".mensaje").fadeOut(5000, function(){
					$(this).html("");
					$(this).fadeIn(3000);
				}); 
			}
			
		var idioma_español = {
    "sProcessing":     "Procesando...",
    "sLengthMenu":     "Mostrar _MENU_ registros",
    "sZeroRecords":    "No se encontraron resultados",
    "sEmptyTable":     "Ningún dato disponible en esta tabla",
    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    "sInfoPostFix":    "",
    "sSearch":         "Buscar:",
    "sUrl":            "",
    "sInfoThousands":  ",",
    "sLoadingRecords": "Cargando...",
    "oPaginate": {
        "sFirst":    "Primero",
        "sLast":     "Último",
        "sNext":     "Siguiente",
        "sPrevious": "Anterior"
    },
    "oAria": {
        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
    }
}
	</script>
</body>
</html>