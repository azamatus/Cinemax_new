/**
 * Created with JetBrains PhpStorm.
 * User: Aza
 * Date: 26.05.13
 * Time: 19:13
 * To change this template use File | Settings | File Templates.
 */
$(document).ready(function(){
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