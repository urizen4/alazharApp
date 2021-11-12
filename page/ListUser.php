<?php
include_once '../header1.php';
require_once '../fonction/Fonction.php';
require_once '../BD.php';
require_once 'controller.php';
$bamba=utilisateur();
?>
<br>
<br>
<section class="section-popular   white-text">
    <center><a href="addUser.php" class="btn btn-large cyan waves-effect waves-light pulse">AJOUTER UN ADMINISTRATEUR</a></center>
   <div class="card-panel transparent">
   <div class="card-title red darken-3 center">
    <h1><i>L'ADMINISTRATION</i></h1>
   </div>
    <table class="bordered  responsive-table transparent">
    <tr>
        <th class="teal-text ">ID</th>
        <th class="teal-text ">NOM</th>
        <th class="teal-text">PRENOM</th>
        <th class="teal-text ">TELEPHONE</th>
        <th class="teal-text ">LOGIN</th>
        <th class="teal-text ">STATUT</th>
        <th class="teal-text " colspan='2' style="margin-left:10%;">ACTION<th>
    </tr>
    <?php
     foreach ($bamba as $b) 
     {
      
        ?>
        <tr>
        <td class="red-text"><?=$b['idUser']?></td>
        <td><?=strtoupper($b['nomUser'])?></td>
        <td><?=ucfirst($b['prenomUser'])?></td>
        <td><?=$b['TelUser']?></td>
        <td><?=$b['LOGIN']?></td>
        <td><?=$b['nomProfile']?></td>
        <td  colspan="2">
        <a href="inscription.php?editer=<?=$b['idUser']?>" class="btn green waves-effect waves-light hoverable" style="margin-right:10%">modifier</a>
        </td>
        <td>
        <a href="ClasseEleve.php?supprimer=<?=$b['idUser']?>" class="btn red darken-2 waves-effect waves-light hoverable" style="margin-right:15%">supprimer</a>
        </td>
        </tr>
     <?php
    }
    ?>
    </table>
  </div>
</section>
<?php
 include_once '../footer1.php';
 ?>
 <?php