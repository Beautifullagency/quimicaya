$(window).on('load', function(){
    $('#loaderGeneral').fadeOut('slow');
    $("#areaContacto").on('change', function() {

        var formulario = $('#formularioContacto');
        var emailEnvio = $(this).val();

        switch (emailEnvio) {
          case 'Comercial / Nuevas unidades de negocio':
            $(formulario).removeAttr('action').attr('action', 'form-comercial.php');
            break;
          case 'Ventas / Pedidos':
            $(formulario).removeAttr('action').attr('action', 'form-ventas.php');
            break;
          case 'Trabajar con nosotros':
            $(formulario).removeAttr('action').attr('action', 'form-empleos.php');
            break;
          default:
            $(formulario).removeAttr('action').attr('action', 'form.php');
        }
    });
});
