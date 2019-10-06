$(document).ready(function(){
    console.log('test');
    $('#football').click(function(){
        if($('.Football').is(":visible")){
            $('.Football').hide();
        }
        else{
            $('.Football').show();
        }

        // $('.Football').hide();
    });
});


