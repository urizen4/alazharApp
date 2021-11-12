<?php
session_start();
  try{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host=localhost;dbname=alazhar', 'root', '',$pdo_options);
} 
catch (Exception $e) {
    
    die('Erreur :'.$e->getmessage());
}
$bamba=$db->query("SELECT *FROM messageUser ORDER by idMessage DESC")->fetchAll();
foreach($bamba as $b){
    ?>
<h5 class="" style="font-family:serif; font-weight:bold;"><?=$_SESSION['prenom']." ".$_SESSION['nom']?></h5>
<div class="chip transparent  white-text" style="font-size:large;
  height:20%;
  font-family:Arial;
  font-weight:bold;">
   <?=$b['message']?>
   <a href="/ALAZHAR/public/js/recup.php?supprimer=<?=$b['idMessage']?>"><i class="material-icons small red-text">delete</i></a>
</div>
<?php   
}
if (isset($_GET['supprimer'])) {  
  $id = $_GET['supprimer'];
  $db->exec("DELETE FROM messageUser WHERE idMessage=$id");
  header("location:/ALAZHAR/page/Accueil.php");
 }
?>