<?php
session_start();
require_once '../fonction/Fonction.php';
include_once 'topBar.php';
?>
<br>
<div class="container">
<h4 class="center white-text teal" style="">WELCOME <?= $_SESSION['prenom']." ".$_SESSION['nom']." ".$_SESSION['profile'] ?><strong class="red-text text-darken-2" style="font-weight:bold">TO Alazhar.App</strong></h4>
<div class="container">
    <div class="row">
            <div class="col s12"></div>
            <p class="white-text">
              <h5 class="grey-text">alazhar est une ecole islamique fonde en 1995 par cheikh mourtada MBACKE 
              pour but d'éduquer les jeunes par la vertue et intellec Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quidem, repellat ipsum libero dolorem fugiat quis, iure architecto inventore, voluptate voluptatem quia! Aliquid saepe, iure magni nostrum earum mollitia accusantium ipsum.</h5>
            </p>
     </div>
     <form action="" method="post" id="formulaire">
     <div id="return"></div>
       <div class="row">
        <div class="input-field">
          <input type="text" name="nameUser" id="nom" placeholder="NOM" class="grey" style="border-radius:100px;">
        </div> 
        <div class="input-field">
          <textarea name="messageUser" id="Message" class="materialize-texterea grey" style="border-radius:100px;" placeholder="VEUILLEZ ECRIRE VOTRE MESSAGE" >
          </textarea>
       </div> 
           <button type="submit" class="btn btn-large cyan waves-effect waves-light pulse" id="btnSend">ENVOYER</button>
       </div>
       </form>

       <div id="afficher" class="red-text">
           
       </div>
       <h5 class="red-text center" style="font-family:papyrus; font-weight:bold; font-size:50px;" >By HexaDec44</h5>
     </div>
</div>
<?php
 include_once '../footer1.php';
 ?>
  <script>
         $(document).ready(function () {
          $('.dropdown-button').dropdown({
          constrainWidth: false,
          hover: true,
          belowOrigin: true,
          alignment: 'left'
      });
//initialistion en js
      $('select').material_select();
   });
  </script>