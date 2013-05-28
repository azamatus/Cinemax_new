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
    $('#login').bind('focus blur', function(event){
            if(event.type == 'focus'){
                 if(this.value == 'Введите свой логин')
                 { this.value = ''; }
            }
            if(event.type == 'blur'){
                if(this.value == '')
                { this.value = 'Введите свой логин'; }
            }
      }
    );
    $('#password').bind('focus blur', function(event){
        if(event.type == 'focus'){
            if(this.value == 'password')
            { this.value = '';}
        }
        if(event.type == 'blur'){
            if(this.value == '')
            { this.value = 'password';}
        }
    });
 });
