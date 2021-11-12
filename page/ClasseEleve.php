<?php
include_once '../header1.php';
require_once '../fonction/Fonction.php';
//require_once '../BD.php';
require_once 'controller.php';
$bamba=Eleve();
$samba=0;
$F = "FCFA";
if (isset($_POST['searchS'])) {
  $search = $_POST['search']; 
  $bamba=$db->query("SELECT *FROM eleve,classe WHERE idClasse_1 = idClasse AND nomClasse = '$search' ")->fetchAll();
  if ($bamba==0) {
   echo "<div class='white-text center-align'>cette classe n'existe pas encore</div>";
  }
}else {
  $bamba=Eleve(); 
}
?>
<br>
<br>
      <form action="" method="post" >
      <div class="container">
       <div class="row">
        <div class="input-field col s4">
         <input type="text" name="search" placeholder="recherche une classe" id="search"  class="grey darken-2 white-text" style="border-radius:100px">
         <button type="submit" name="searchS" class="btn cyan waves-effect waves-light">
          rechercher 
         </button>
        </div>
        </div>
        </div>
<section class="section-popular   white-text">
   <div class="card-panel transparent">
   <div class="card-title red darken-3 center">
    <h1><i>NOS ELEVES</i></h1>
   </div>
    <table class="bordered  responsive-table transparent">
    <tr>
        <th class="teal-text ">ID</th>
        <th class="teal-text ">NOM</th>
        <th class="teal-text">PRENOM</th>
        <th class="teal-text ">ADRESSE</th>
        <th class="teal-text ">TELEPHONE</th>
        <th class="teal-text ">NUMERO REGISTRE</th>
        <th class="teal-text ">DATE DE NAISSANCE</th>
        <th class="teal-text ">CLASSE</th>
    </tr>
    <?php
     foreach ($bamba as $b) 
     {
       $F = "FCFA";
       $samba+=$b['montant']; 
        ?>
        <tr>
        <td class="red-text"><?=$b['idEl']?></td>
        <td><?=strtoupper($b['nomEl'])?></td>
        <td><?=ucfirst($b['prenomEl'])?></td>
        <td><?=$b['adresseEl']?></td>
        <td><?=$b['TelEl']?></td>
        <td><?=$b['NumRegistre']?></td>
        <td><?=$b['dateNaissEl']?></td>
        <td><?=$b['nomClasse']?></td>
     <?php
    }
    ?>
    </table>
  </div>
</section>
</form>
<?php
 include_once '../footer1.php';
 ?>
 <?php
