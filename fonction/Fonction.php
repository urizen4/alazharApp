<?php
require_once '../BD.php';
?>
<?php
//requete pour afficher les classe dans le formulaire dinscription;
function Classe()
{ 
    global $db;
    $req="SELECT *FROM  classe ORDER BY nomClasse";
    return $db->query($req)->fetchAll();
}
//requete pour enregistrer un eleve dans la BD;
function Inscription($NomEleve,$PrenomEleve,$AdresseEleve,$TelEleve,$NumeroRegistre,$DateNaissEleve,$classe,$mont,$STATUT)
{
    global $db;
    $req="INSERT INTO eleve (idEl,nomEl,prenomEl,adresseEl,TelEl,NumRegistre,dateNaissEl,idClasse_1,montant,statut)
     VALUES(null,'$NomEleve','$PrenomEleve','$AdresseEleve','$TelEleve','$NumeroRegistre','$DateNaissEleve' ,'$classe','$mont','$STATUT')" ;
    return $db->exec($req); 
}
//requete pour verifier si login et le mot de passe existe dans la BD;
function Connexion($login,$motDePasse)
{
    global $db;
    $req="SELECT *FROM utilisateur WHERE LOGIN='$login' AND PASSWORD='$motDePasse' ";
    return $db->query($req)->fetch();
}
//requete pour voir les profiles des utilisateurs dans la BD;
function profile()
{
    global $db;
    $req="SELECT *FROM  profile ORDER BY nomProfile";
    return $db->query($req)->fetchAll();
}
//requete pour voir tout les  eleves de lecole qui sont  dans la base de donnees; 
function  Eleve()
{
    global $db;
    return $db->query("SELECT *FROM eleve,classe WHERE idClasse_1 = idClasse ")->fetchAll();
}
//requete pour retourner ID pour la modification
// function FindUser($id)
// {
    // global $db;
    // $req =" SELECT *  FROM  eleve,classe WHERE idClasse_1 = idClasse AND idEl = $id ";
    // return $db->query($req)->fetch();
// }
// function FindUser($id)
// {
//     global $db;
//     $req =" SELECT *  FROM  'utilisateur','profile' WHERE idProfile_1 = idProfile AND idUser = $id ";
//     return $db->query($req)->fetch();
// }
//une fonction qi permet de creer un utilisateur
function addUser($nameUser,$firstnameUser,$phoneUser,$login,$profileUser){
    global $db;
    $req="INSERT INTO utilisateur (idUser,nomUser,prenomUser,TelUser,LOGIN,PASSWORD,idProfile_1)
     VALUES(null,'$nameUser','$firstnameUser','$phoneUser','$login','passer','$profileUser')";
     return $db->exec($req);
}
//la fonction qui permet afficher la liste des utilisateur
function utilisateur()
{
    global $db;
    $req =" SELECT *FROM  utilisateur,profile  WHERE idProfile_1 = idProfile";
    return $db->query($req)->fetchAll();
}
//la fonction qui permet afficher la liste des enseignants et leurs classes
function enseignants(){
global $db;
$req = "SELECT *FROM  utilisateur,profile  WHERE idProfile_1 = idProfile AND nomProfile='ENSEIGNANT' ";
return  $db->query($req)->fetchAll();
}
