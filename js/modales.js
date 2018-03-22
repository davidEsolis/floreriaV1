$(function(){

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
