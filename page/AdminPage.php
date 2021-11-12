<?php
include_once '../header1.php';
require_once '../fonction/Fonction.php';
//require_once '../BD.php';
//require_once 'controller.php';

?>
<div class="container">
<div class="card-panel transparent">
<span class="card-title"><h1 class="teal-text center" style="font-family:papyrus; font-weight:bold; font-size:50px;" >ALAZHARAPP</h1></span>
<h4 class="red-text center" style="font-family:papyrus; font-weight:bold; font-size:50px;" >By HexaDec44</h4>
  <div class="row">
   <div class="card col s12  l3 m6 transparent">
      <span class="card-title"><h4 class="cyan-text center" >ELEVES</h4></span>
      <center><a href="eleve.php" class="btn cyan darken-4 btn-large waves-effect waves-light pulse">afficher</a></center>
   </div>
   <div class="card col s12  l3 m6 transparent">
      <span class="card-title"><h4 class="green-text center">ENSEIGNANTS</h4></span>
      <center><a href="Enseignant.php" class="btn green darken-4 btn-large waves-effect waves-light pulse">afficher</a></center>
   </div>
   <div class="card col s12  l3 m6 transparent">
      <span class="card-title"><h4 class="yellow-text center">PRESENCES</h4></span>
      <center><a href="" class="btn yellow darken-4 btn-large waves-effect waves-light pulse">afficher</a></center>
   </div>
   <div class="card col s12  l3 m6 transparent">
      <span class="card-title"><h4 class="red-text center">UTILISATEURS</h4></span>
      <center><a href="ListUser.php" class="btn red darken-4 btn-large waves-effect waves-light  pulse">afficher</a></center>
   </div>
  </div>
  </div>
</div>
<?php
 include_once '../footer1.php';
?>
<script type="text/javascript" src="/ALAZHAR/public/js/script.js"></script>
<script>
$(document).ready(function () {
      $('.dropdown-button').dropdown({
        constrainWidth: false,
        hover: true,
        belowOrigin: true,
        alignment: 'left'
      });

      // JAVASCRIPT START HERE //
      
      $('.carousel').carousel(); 
    });
</script>