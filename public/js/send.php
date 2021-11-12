<?php
  try{
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $db = new PDO('mysql:host=localhost;dbname=alazhar', 'root', '',$pdo_options);
} 
catch (Exception $e) {
    
    die('Erreur :'.$e->getmessage());
}
if(isset($_POST['nom'],$_POST['message']) && !empty($_POST['nom']) && !empty($_POST['message'])) {
   $nom = $_POST['nom'];
   $message = $_POST['message'];
   $db->exec("INSERT INTO messageUser (idMessage,name,message) VALUES (null,'$nom','$message') ");
    echo "<div class='white-text green'>message enoyer avec succes!</div>";
}
else 
{
  echo "<div class='white-text red'>veuillez remplire les champs svp!</div>";
}
      


?>