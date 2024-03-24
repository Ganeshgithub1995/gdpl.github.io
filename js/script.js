$(document).ready(function () {
    $('.gallery-item').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });

    $("button").mouseenter(function(){
        $("#go").css("background-color","black");
      
    });
   
    $("button").mouseleave( function() {
        $("#go").css("background-color","white");
      });
});


