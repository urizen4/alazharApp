<?php
include_once '../header1.php';
require_once '../fonction/Fonction.php';
require_once 'controller.php';
$bamba=Classe();
?>
<link rel="stylesheet" type="text/css" href="/ALAZHAR/public/Css/style.css">
    <br>
    <br>
        <div class="container">
            <div class="row">
                <div class="card-panel transparent col s12 center">
                        <div class="card-panel teal darken-2">
                            <center><h4><i class='white-text' style="font-family:serif;">INSCRIPTION</i></h4></center>
                        </div>
                        <form method="POST" action="controller.php">
                 <div class="row">
                 <input type="hidden"   name="idELeve" value="<?= $id ?>" >
                    <div class="input-field col s6 l5 m6">
                        <input type="text"  name='NomEleve' value='<?=$Nom ?>' required class="grey-text text-lighten-1 " style="border-radius:100px">
                        <label for="nomEl" class='white-text'>NOM</label>
                    </div>
                    <div class="input-field col S6 l7 m6">
                        <input type="text"  name='PrenomEleve' value='<?= $Prenom ?>' required class="grey-text text-lighten-1 " style="border-radius:100px">
                        <label for="prenomEl" class='white-text'>PRENOM</label>
                    </div>
                </div>
                    <div class="input-field">
                        <input type="text"  name='AdresseEleve' value='<?= $Adresse  ?>' required class="grey-text text-lighten-1"> 
                        <label for="adresseEl" class='white-text'>ADRESSE</label>
                    </div>
                    <div class="input-field">
                        <input type="number"  name='TelEleve' value='<?=$Telephone?>' required class="grey-text text-lighten-1">
                        <label for="TEL" class='white-text'>TELEPHONE</label>
                    </div>
                    <div class="input-field">
                        <input type="text"  name='DateNaissEleve' value='<?=$DateNaisse?>' required class='datepicker grey-text text-lighten-1'>
                        <label for="dateNaissEl" class="white-text">DATE DE NAISSANCE</label>
                    </div>
                    <div class="input-field">
                        <input type="number"  name='NumeroRegistre' value='<?=$NumeroR?>' min="1" required class="grey-text text-lighten-1">
                        <label for="NumRegistre" class='white-text'>NUMERO RGISTRE</label>
                    </div>
                <div class="input-field">
                    <select   name="classe"  class="form-control white-text">
                        <option value=""  disabled  selected>choisissez la classe</option>
                        <?php
                            foreach ($bamba as  $b) {
                                ?>
                            <option  value="<?=$b['idClasse']?>" class='white-text'><?=strtoupper($b['nomClasse'])?></option>
                           <?php    
                            }
                           ?>
                    </select>
                    <div class="input-field">
                        <input type="number"  name='mont' min=5000   max=10000  required value='<?=$mont?>' class="grey-text text-lighten-1"> 
                        <label for="MON" class='white-text'>MONTANT</label>
                    </div>
                    <div class="input-field">
                    <select name="STATUT" id="" class="form-control white-text">
                        <option value=""  selected class='white-text' disabled>STATUT DE PAYEMENT</option>
                        <option value="COMPLET"   class='white-text'>COMPLET</option>
                        <option value="INCOMPLET"   class='white-text'>INCOMPLET</option>
                    </select>
                    <?php
                    if ($UpDate == true) : 
                  ?>
                    <center>
                          <button type='submit' name='modifier' class='btn btn-large cyan waves-effect waves-light'>
                          <i class="material-icons">
                     verified_user
                          </i>
                           MODIFIER
                         </button>
                     </center>
                <?php
                 else :
                ?>
               <center>
                    <button type='submit' name='valider' class='btn btn-large red waves-effect waves-light'>
                    <i class="material-icons">
                     verified_user
                    </i>
                      VALIDER
                   </button>
               </center>  
                 <?php endif;?>
              </form>
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
      
      $('.datepicker').pickadate({
       selectMonths :true,
       selectYears  :50,
       today :'today'
      });
    });
  </script>
 <?php
?>