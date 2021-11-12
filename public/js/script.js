
$(document).ready(function(){
  //$('.carousel').carousel();
   afficheMessage();
    $('#formulaire').submit(function () {
       var name = $('#nom').val();
        var message = $('#Message').val();

        $.post('/ALAZHAR/public/js/send.php',{nom:name,message:message},function(data){
            $('#return').html(data);
            $('#nom').val('');
            $('#Message').val('');
            afficheMessage();
        });
    return false;
    });
  function afficheMessage() {
      $.post('/ALAZHAR/public/js/recup.php',function (data) {
        $('#afficher').html(data);
      });
  }
 setInterval(afficheMessage,1000);
});

