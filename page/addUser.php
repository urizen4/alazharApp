<?php
include_once '../header1.php';
require_once '../fonction/Fonction.php';
require_once 'controller.php';
$variable=profile();
?>
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col s12 offset-l2 l8 m12">
    <div class="card-title teal center white-text">
     <h1>AddUser</h1>
    </div>
    <div class="card-panel transparent">
       <form action="controller.php" method="post">
              <div class="input-field">
                      <input type="text"  name="nameUser"  placeholder='entrer votre nom' class='cyan' style="border-radius:100px; font-weight: bold;" required >
                    <label for="nom"></label>
              </div>
               <div class="input-field">
                     <input type="text"  name="firstnameUser"  placeholder='entrer votre prenom'  class='green  black-text' style="border-radius:100px; font-weight: bold;">
                    <label for="prenom"></label>
               </div>
               <div class="input-field">
                    <input type="number"  name="phoneUser"  placeholder='entrer votre Telephone'  class='yellow  black-text' style="border-radius:100px; font-weight: bold;">
                   <label for="Telephone"></label>
               </div>
               <div class="input-field">
                    <input type="text"  name="login"  placeholder='entrer votre Login'  class='red  black-text' style="border-radius:100px; font-weight: bold;">
                   <label for="Login"></label>
               </div>
               <div class="input-field">
                   <select name="profileUser" id="" class="form-control white-text">
                    <option value=""  disabled selected>choisir votre profile</option>
                    <?php
                         foreach ($variable as   $v) {
                           ?>
                          <option value="<?=$v['idProfile']?>" class=""><?=$v['nomProfile']?></option>
                           <?php
                         }
                    ?>
                 </select>
               </div>
               <center><button type="submit" name="cool" class="btn btn-large cyan pulse">
               <i class="material-icons">verified_user</i>
               ENREGISTRER
               </button></center>
               
       </form>
    </div>
      </div>
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
      $('select').material_select();
    });
  </script>