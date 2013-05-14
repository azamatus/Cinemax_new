$(document).ready(function(){
    $('#projectors').bind('mouseover mouseleave', function(event){
        if(event.type == 'mouseover'){
            $('.projectors_light').fadeIn('slow');
        }
        else {
            $('.projectors_light').fadeOut('slow');
        }
    });
    $(document).on('click','#menu_bounce',function(){
       $(this).effect('bounce',{times:3},'slow');
    });
    $
});
