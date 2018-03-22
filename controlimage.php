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
     <link rel="stylesheet" href="js/alertify/css/alertify.min.css">
    <link rel="stylesheet" href="js/alertify/css/themes/default.min.css">
    
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
                    
                <h3 class="elenco">Control de Imagenes</h3>
                <h3 class="leer">Usuario: <i id="usuario_fp">Administradores</i></h3>
                </div>
            </div>
        </section>
        </div>

<!-- cargar imagenes -->
<section class="contenedor">
        <h2>Subir Imagenes á Galerias</h2>
        <div id="preview" class="thumbnail">
            <a href="#" class="btn btn-default" id="file-select" name="file-select">Elige el Archivo</a>
            <img id="prevw" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTcxIiBoZWlnaHQ9IjE4MCIgdmlld0JveD0iMCAwIDE3MSAxODAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MTgwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTYxYzE1MWE5ODIgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNjFjMTUxYTk4MiI+PHJlY3Qgd2lkdGg9IjE3MSIgaGVpZ2h0PSIxODAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI1OC43NjU2MjUiIHk9Ijk0LjUiPjE3MXgxODA8L3RleHQ+PC9nPjwvZz48L3N2Zz4="/>
    </div>
        <form name="form_env" id="form_env" enctype="multipart/form-data" method="post">
            <div id="photos">
                
                    <span class="alert alert-info" id="file-info">No hay Archivo aún</span>
                    <input type="file" name="file" id="file" />

                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Nombre</span>
<input id="nombre_pd" name="nombre_pd" type="text" class="form-control" placeholder="Nombre del Articulo" aria-describedby="sizing-addon2" autofocus required>
                      </div>

                      <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon2">Precio</span>
<input id="precio_p" name="precio_p" type="text" class="form-control" placeholder="Precio del Articulo" aria-describedby="sizing-addon2" required>
                      </div>


                    <div class="form-group">
                        <label for="departament">Seleccionar Departanento:</label>
                        <select class="form-control" id="departament" name="departament">
                             <option>Ramos</option>
		                            <option>ArreglosFlorales</option>
		                            <option>CentrosDeMesa</option>
                        </select>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" id="file-save" value="Guardar" onclick="subirImage();">
             </div>
        </form>
       
</section>

 <div class="row">
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ">
			<form id="reGistros" class="form-horizontal" action="" method="POST">
				
				<input type="hidden" id="idusuario" name="idusuario" value="">
				<input type="hidden" id="opcion" name="opcion" value="modificar">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-8"><input id="nombre_u" name="nombre_u" type="text" class="form-control" required></div>				
				</div>
				<div class="form-group">
						<label for="Usuario" class="col-sm-2 control-label">Precio</label>
				 <div class="col-sm-8"><input id="precio_u" name="precio_u" type="text" class="form-control" required>
				 <div>
			
		                     	
				</div>
				<div class=contenedor">
					<div class="form-group">
		                        <br><label for="departamentE" style="left:15%;">	Seleccionar Departanento</label>	
		                        <select class="form-control" id="departamentE" name="departamentE">
		                            <option>Ramos</option>
		                            <option>ArreglosFlorales</option>
		                            <option>CentrosDeMesa</option>
		                        </select>
		                    </div>
		                  </div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8" ">
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
					<h4 class="modal-title" id="modalEliminarLabel">Eliminar Imagen</h4>
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
							<th>Precio</th>
							<th>Departamento</th>
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
	 <!-- aqui seleccionamos EL JS de alertify -->
<script src="js/alertify/alertify.min.js"></script>
	
	<script>		
		$(document).on("ready", function(){
			listar();
			
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
				url: "php/guardarA.php",
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
			
		
		
		var eliminar = function(){
		           $("#eliminar-usuario").on("click", function(){
		 		 var idusuario = $("#frmEliminarUsuario #idusuario").val(),
		 		 opcion = $("#frmEliminarUsuario #opcion").val();
		 	   $.ajax({
		 		      method:"POST",
		 		      url: "php/guardarA.php",
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
				$("#precio_u").val("");
				$("#departamentE").val("");
			}

		var listar = function(){
			var table = $("#dt_cliente").DataTable({
				"destroy": true,
				"ajax":{
					"method": "POST",
					"url": "php/listarA.php"
					},
					"columns":[
					{"data":"nom_img_fp"},
					{"data":"precio_fp"},
					{"data":"dep_img_fp"},
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
				var idusuario = $("#idusuario").val(data.id_img_fp),
				 nomUsuario = $("#nombre_u").val(data.nom_img_fp),
				 userUsuario = $("#precio_u").val(data.precio_fp),
				 passUsuario = $("#departamentE").val(data.dep_img_fp)
			});
		}
		
		var obtenerIdEliminar = function(tbody, table){
			$(tbody).on("click", "button.eliminar", function(){
				var data = table.row( $(this).parents("tr") ).data();
				var idusuario = $("#frmEliminarUsuario #idusuario").val(data.id_img_fp);
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