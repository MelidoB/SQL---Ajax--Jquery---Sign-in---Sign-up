$(document).ready(function() {
  
var sign_in_visible = true;
var sign_up_visible = false;

$('#navegation_bar').children().eq(0).on('click', function() {
   
if (sign_in_visible == true && sign_up_visible == false){
    $('#sign_in_container').css('display', 'none');
    $('#sign_up_container').css('display', 'none');
    
    sign_in_visible = false;
    sign_up_visible = false;
}
else if(sign_in_visible == false && sign_up_visible == true){
    $('#sign_in_container').css('display', 'flex');
    $('#sign_up_container').css('display', 'none');
    sign_in_visible = true;
    sign_up_visible = false;
}else{
    $('#sign_in_container').css('display', 'flex');
    $('#sign_up_container').css('display', 'none');
    sign_in_visible = true;
    sign_up_visible = false;
}
});
$('#navegation_bar').children().eq(2).on('click', function() {
   
    if (sign_in_visible == true && sign_up_visible == false){
        $('#sign_in_container').css('display', 'none');
        $('#sign_up_container').css('display', 'flex');
        
        sign_in_visible = false;
        sign_up_visible = true;
    }
    else if(sign_in_visible == false && sign_up_visible == true){
        $('#sign_in_container').css('display', 'none');
        $('#sign_up_container').css('display', 'none');
        sign_in_visible = false;
        sign_up_visible = false;
    }
    else{
        $('#sign_in_container').css('display', 'none');
        $('#sign_up_container').css('display', 'flex');
        sign_in_visible = false;
        sign_up_visible = true;
    }
    
});
});