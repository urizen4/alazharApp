<?php
 require_once '../fonction/Fonction.php';
 require_once '../BD.php';
 include_once '../header1.php';
 require_once 'controller.php';
?>
<?php
$id = 0;
$UpDate = false;
$Nom = '';
$Prenom = '';
$Adresse = '';
$Telephone = '';
$DateNaisse = '';
$NumeroR= '';
$DateNaisse = '';
$mont = "";

//pour l'inscription
  if (isset($_POST['valider'])) {
    extract($_POST);
    $pyromane=Inscription($NomEleve,$PrenomEleve,$AdresseEleve,$TelEleve,$NumeroRegistre,$DateNaissEleve,$classe,$mont,$STATUT);
    if($pyromane==1)
    {
        header("location:inscription.php");
        echo '<div class="cyan-text"><h4>Bien Enregistrer</h4></div>';
    }else {
        echo '<div class="red-text"><h4>BROH DOUGOUL DANGA DIOUM(:!!!!</h4></div>';
    }
}
//condition pour supprimer un eleve avec recuperation de valeur avec GET
if (isset($_GET['supp'])) {
    $id = $_GET['supp'];
     $db->exec("DELETE  FROM eleve WHERE idEl=$id");
     header("location:ClasseEleve.php");
  }
  //condition pour supprimer un utilisateur avec recuperation de valeur avec GET
if (isset($_GET['supprimer'])) {
   $id = $_GET['supprimer'];
   $db->exec("DELETE  FROM utilisateur WHERE idUser=$id");
   header("location:ListUser.php");
}
//Pour editer les informations d'un eleve avec la valeur GET
if(isset($_GET['edi'])) {
    $id = $_GET['edi'];
    $UpDate = true;
    $mySql=$db->query("SELECT *FROM eleve,classe WHERE idClasse_1 = idClasse AND idEl = $id ");
    if (count($mySql)==1)
    {
     $p = $mySql->fetch();
     $Nom = $p['nomEl'];
     $Prenom = $p['prenomEl'];
     $Adresse = $p['adresseEl'];
     $Telephone = $p['TelEl'];
     $DateNaisse = $p['dateNaissEl'];
     $NumeroR= $p['NumRegistre'];
     $DateNaisse = $p['dateNaissEl'];
     $mont = $p['montant'];
    }
      } 
    if(isset($_POST['modifier'])) {
       extract($_POST);
       $pyro = $db->exec("UPDATE eleve SET nomEl='$NomEleve',
                                    prenomEl='$PrenomEleve',
                                    adresseEl='$AdresseEleve',
                                    TelEl=  $TelEleve,
                                    NumRegistre= $NumeroRegistre,
                                    DateNaissEl='$DateNaissEleve',
                                    montant= $mont WHERE idEl= $idELeve  ");
                  if (count($pyro)!= null) {
                    echo 'ca marche broh';
                  }
                header("location:page1.php");
        }  
      //$NomEleve,$PrenomEleve,$AdresseEleve,$TelEleve,$NumeroRegistre,$DateNaissEleve,$classe,$mont,$STATUT
      if (isset($_POST['cool'])) {
        extract($_POST);
        $pyromane=addUser($nameUser,$firstnameUser,$phoneUser,$login,$profileUser,$profileUser);
        if($pyromane==1)
        {
          echo '<div class="blue-grey-text"><h4>BROH DOUGOUNA!!!!</h4></div>'; 
        }else {
            echo '<div class="red-text"><h4>BROH DOUGOUL DANGA DIOUM(:!!!!</h4></div>';
        }
    }
//pour gerer la liste de presence avec la variable $_GET;
if (isset($_POST['send'])) {
  extract($_POST);
  $today=date('d/m/Y');
  $bamba=$db->exec("INSERT INTO statutProf(idEnseignant,nomProf,PrenomProf,statutProf,date) VALUES(null,'$nomProfesseur','$PrenomProfesseur','$STATUT','$today') ");
 if ($bamba==1) {
    header("location:AdminPage.php");
 }else {
    header("location:AdminPage.php");
  }
}

//pour gerer la liste des absencees avec la variable $_GET;


