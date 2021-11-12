<?php
include_once '../header1.php';
require_once '../fonction/Fonction.php';
require_once '../BD.php';
require_once 'controller.php';
?>
<div class="container">
<h1 class="teal-text center" style="font-family:papyrus; font-weight:bold; font-size:50px;" >ALAZHARAPP</h1>
    <h4 class="red-text center" style="font-family:papyrus; font-weight:bold; font-size:50px;" >By HexaDec44</h4>
  <form action="controller.php" method="post" id="formulaire">
       <div class="input-field grey-text">
         <input type="text" name="nomProfesseur" class="green darken-4"  required>
         <label for="">NOM</label>
     </div>
     <div class="input-field">
        <input type="text" name="PrenomProfesseur" class="yellow darken-2" required>
        <label for="">PRENOM</label>
   </div>
   <div class="input-field">
                    <select name="STATUT" id="" class="form-control white-text red" required>
                        <option value=""  selected class='white-text' disabled>STATUT</option>
                        <option value="PRESENT"   class='white-text'>PRESENT</option>
                        <option value="ABSENT"   class='white-text'>ABSENT</option>
                    </select>
   <button type="submit" name="send" class="btn btn-large cyan waves-effect waves-light center pulse" id="btnSend">ENVOYER</button>
  </form>
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
      //$('#formulaire').slideDown();
   });
  </script>