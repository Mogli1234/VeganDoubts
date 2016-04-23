var FUNCTIONS = FUNCTIONS || {
    switchLogin: function() {
        var subcategory = jQuery('#subcategory');
        subcategory.fadeToggle( 500, "linear" );
    },
    bindEvents: function() {
        //jQuery('.switch').click(FUNCTIONS.switchLogin);
        $('#check_sub').change(FUNCTIONS.switchLogin);
    },
};

$(document).ready(function() {
    //materialize
    $('select').material_select();
    FUNCTIONS.bindEvents();

 $('#crear_pregunta').click(function () {
     if($('#check_sub').prop('checked')===false)
     {
         $('#sub_categoria_id').val('ghjg');
     }
    });
   /* $('#create_answer').click(function () {
        return  redirect('/Respuesta/{{}}');
    });*/
});

$(".button-collapse").sideNav();