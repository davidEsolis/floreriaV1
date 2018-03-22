<?php
no 
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
     <link rel="stylesheet" href="css/posiciones.css">
     <link rel="stylesheet" href="cssempresa/contact.css">
     <link rel="stylesheet" href="cssempresa/emp.css">
     <link rel="stylesheet" href="css/modales.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="https://file.myfontastic.com/g3LYwuYrqLK8Mz9Nf7FKeV/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Bigelow+Rules|Butterfly+Kids|Cabin+Sketch|Chicle|Cookie|Courgette|Dancing+Script|Dosis|Gloria+Hallelujah|Julius+Sans+One|Kaushan+Script|Lobster|Lobster+Two|Londrina+Sketch|Pacifico|Padauk|Poiret+One|Raleway|Roboto+Condensed|Satisfy|Sevillana|Spectral+SC|Spinnaker|Tangerine|Ubuntu+Mono|VT323" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>floreriaP</title>
    <style>
    	.zero{
    		
    	}
    </style>
</head>
<body>
    <header> 
        <div class="contenedor">
        
       <h1 class="font1"><img class="logox" src="img/loguito.png" alt="Logo">Floreria Primavera</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-list" for="menu-bar"></label>
            <nav class="menu">
             
           <a id="m_uno" class="menu_font icon-home-house-streamline" href="index.php"> Inicio</a>
              <a id="m_dos"  class="menu_font icon-heart-o" href="galerias.php"> Galeria</a>
              <a id="m_tres"  class="menu_font icon-paperplane" href="contacto.html"> Contacto</a>
              
            </nav>
         </div>
    </header>
  
    <main>
           
        <section id="bannner">
            <img src="img/banner_1.jpg">
            <div class="contenedor">
               <div id="baner">
                <h3 class="elenco">Arreglos Florales para cada Ocasión</h3><hr>
                <a class="leer" href="galerias.php">Ver más</a>
               </div>
            </div>
        </section>


        <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/Floreria-primavera-880978531924320/" target="_blank" 	class="icon-facebook-alt"></a></li>
                    <li><a href="contacto.html" class="icon-envelope-o"></a></li>
                </ul>
            </div>
       
                  <div class="slider">
                    <ul>
                            <li><img src="img/12.jpg" alt=""></li>
                            <li><img src="img/15.png" alt=""></li>
                            
                            <li><img src="img/13.jpg" alt=""></li>
                            
                    </ul>
                  </div> <br><hr><br>
      
       
       <section id="blog">
       
       <div  style="background-color: rgba(167, 0, 89, 0.315); height:100%; " >
       	 <h3 id="gale"class="galeria icon-gift">Ramos<br></h3> 
       	  <div id="arreglosF" class="contenedor"></div>
       </div>
       
       <div  style="background-color: rgba(167, 0, 89, 0.315); height:100%; " >
       	 <h3 id="gale"class="galeria icon-gift">Arreglos Florales<br></h3>       
          <div id="arreglosfp" class="contenedor"></div>
       </div>
       
       <div  style="background-color: rgba(167, 0, 89, 0.315); height:100%;" >
       	 <h3 id="gale"class="galeria icon-gift">Centros de Mesa<br></h3>       
          <div id="otroF" class="contenedor"></div>
       </div>
         
          
       </section>
       <section id="info">
        <h3 class="localiz">Localizanos Aquí</h3>
        <h4 class="localiz">Sra. Norma Alicia Baez Felix</h4> 
        <h4 class="localiz">Tel.165.5880, Cel.668.102.3290</h4> 
        <hr><br>
           <iframe  id="localiza" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3591.950214717431!2d-108.98348928497819!3d25.805216483617077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ba28b3757ac8f3%3A0xe316a052558b4485!2sPrimavera!5e0!3m2!1ses-419!2smx!4v1519145317256" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
                       
    </main>
     <footer>
        <div  class="contenedor leer">
            <p class="copy">FloreriaPrimavera &copy; 2018 Derechos Reservados</p>
            <div class="sociales">
                <a class="icon-facebook-squared" href="#"></a>
            </div>                 
        </div>
    </footer>

<!-- AQUI SE LEVANTA LA MODAL DE LAS IMAGENES -->
       <div id="mimodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <span class="icon-cancel cerrar" data-dismiss="modal"></span>
            <img src="" class="modal-content recibir-imagen" width="100%" height="100%">
            
            <div class="modal-footer">
              <p><strong class="texto-imagen"></strong></p>
            </div>
        </div>
</div>   
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/modales.js" type="text/javascript"></script>
    <script type="text/javascript">
    	 
//ejecuta ya que este listo el navegador para poder actuar
			
		
		$(function(){
			loadData();
			loadDataA();
			loadDataO();
			
			
    $('.imagen').click(function(){
        var imagen1=$(this).attr('src');
        var titleimagen=$(this).attr('title');

        if (imagen1==""){

          $('.recibir-imagen').attr('src','http://www.51allout.co.uk/wp-content/uploads/2012/02/Image-not-found.gif');
          $('#mimodal').modal();

        }else{
	        $('.recibir-imagen').attr('src',imagen1);
	        $('.texto-imagen').text(titleimagen);
	        $('#mimodal').modal();
      }
    });
});
		
		
		
		
		
		
		
		
		//crea la funcion para traer el json de la 
		function loadData(){
			$.ajax({
				type:"POST",
				url:"php/galerias.php",
			    
				cache: false,
				beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");
				},
				success: function(data){
				//console.log(data);
				var users = JSON.parse(data);
				//console.log(users);
				//SE RECORRE EL ARREGLO Y SE AGREGARA A SECTION contend
	$.each(users, function(index, val){
                    //<img id="img_p" src="`+val.+`" alt="">
                  
        fila=` <article style="" >
      <img src="fotos/`+val.foto_fp+`" id="imagenx"  class="imagen">
         <h3 class=" font1" style="background-color: rgba(167, 0, 89, 0.315); text-align:center;">:`+val.nom_img_fp+`
               </article>`;
                $('#arreglosF').append(fila);
					
				});
			}
		});
	}
	
	//areglos
	
	function loadDataA(){
			$.ajax({
				type:"POST",
				url:"php/galeriasD.php",
			    
				cache: false,
				beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");
				},
				success: function(data){
				//console.log(data);
				var users = JSON.parse(data);
				//console.log(users);
				//SE RECORRE EL ARREGLO Y SE AGREGARA A SECTION contend
	$.each(users, function(index, val){
                    //<img id="img_p" src="`+val.+`" alt="">
                  
        fila=` <article style="" >
      <img src="fotos/`+val.foto_fp+`" id="imagenx"  class="imagen">
         <h3 class="font1" style="background-color: rgba(167, 0, 89, 0.315); text-align:center;">:`+val.nom_img_fp+`
               </article>`;
                $('#arreglosfp').append(fila);
                
				});
			}
		});
	}
    
    //areglos
	
	function loadDataO(){
			$.ajax({
				type:"POST",
				url:"php/galeriasT.php",
			    
				cache: false,
				beforeSend: function () {
                        //$("#resultado").html("Procesando, espere por favor...");
				},
				success: function(data){
				//console.log(data);
				var users = JSON.parse(data);
				//console.log(users);
				//SE RECORRE EL ARREGLO Y SE AGREGARA A SECTION contend
	$.each(users, function(index, val){
                    //<img id="img_p" src="`+val.+`" alt="">
                  
       fila=`<article style="" >
      <img src="fotos/`+val.foto_fp+`" id="imagenx" class="imagen"><br>
         <h3 id="txt-imagenx" class="font1" style="background-color: rgba(167, 0, 89, 0.315); text-align:center;">:`+val.nom_img_fp+`
               </article>`;
                $('#otroF').append(fila);		
					
				});
			}
		});
	}
    
    </script>
</body>
</html>
