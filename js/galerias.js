 
//ejecuta ya que este listo el navegador para poder actuar
		$(document).on("ready", function(){
			//manda a llamar a que cargue los datos en la tabla
			loadData();
		});
		//crea la funcion para traer el json de la 
		var loadData = function(){
			$.ajax({
				type:"POST",
				url:"php/galerias.php",
			    
				cache: false,
				beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");
				},
				success: function(data){
				console.log(data);
				var users = JSON.parse(data);
				console.log(users);
				//SE RECORRE EL ARREGLO Y SE AGREGARA A SECTION contend
				$.each(users, function(index, val){
                    //<img id="img_p" src="`+val.+`" alt="">
                  
                    fila=`<div>
                        <h1 id="grupo" class="">`+val.grupo_elect+`
                        <h1 id="titulo" class="">`+val.nombres_elect+`
                    </div>`;
                $('#conPrinc').append(fila);
							
							//$("#imagen").attr('src', users[i].ftos_elect);
					
					});
			}
		});
	}
    