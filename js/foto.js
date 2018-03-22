
  
 $(document).ready(function(){
    $('#preview').hover(
        function(){
            $(this).find('#file-select').fadeIn();
        }, function(){
            $(this).find('#file-select').fadeOut();
        }
    );
});

$('#file-select').on('click', function(e){
    e.preventDefault();
    $('#file').click();
});

$('input[type=file]').change(function(){
    //toma el valor en chrome de solo el index y no C:/alphinos/imagenes/fufu.png
    var file = (this.files[0].name).toString();
    var reader = new FileReader();

    $('#file-info').text('');
    $('#file-info').text(file);

   // var nombre_archivo = $('#file-info').text(file);

    reader.onload = function(e){
        $('#preview img').attr('src', e.target.result);
        }

        reader.readAsDataURL(this.files[0]);
});