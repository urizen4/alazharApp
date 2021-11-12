<?php
session_start();
include_once '../header1.php';
require_once '../fonction/Fonction.php';
?>
    <br>
    <br>
    <h1 class="teal-text center" style="font-family:papyrus; font-weight:bold; font-size:50px;" >ALAZHARAPP</h1>
    <h4 class="red-text center" style="font-family:papyrus; font-weight:bold; font-size:50px;" >By HexaDec44</h4>
    <div class="container">
            <div class="row">
                    <div class="card-panel transparent col s12 l6 m12  offset-l3">
                        <div class="card teal">
                           <marquee behavior="" direction=""> <h5><i class='white-text'>CONNECTEZ-VOUS</i></h5></marquee>
                        </div>
                        <form action="" method="post">
                          <div class="input-field col s12 ">
                            <input type="text" name='login' placeholder='ENTRER VOTRE LOGIN' required class="white grey-text text-darken-2"
                             style="border-radius:100px;
                                    background-color:cyan;">
                              <label for="log" class='white-text'>LOGIN</label>
                          </div>
                          <div class="input-field col s12">
                            <input type="password" name='motDePasse' placeholder='ENTRER VOTRE MOT DE PASSE' required class="white"  style="border-radius:100px;">
                              <label for="password"class='white-text'>MOT DE PASSE</label>
                          </div>    
                           <center>
                                <button type='submit' name="btnConnect" class="btn btn-large red darken-3  waves-effect waves-light pulse">
                                    <i class='material-icons'>perm_identity</i>
                                    SE CONNECTEZ
                                </button>
                         </center>
                    </form>
                 </div>
            </div>
      </div>
    <?php
    include_once '../footer1.php';
    if (isset($_POST['btnConnect'])) {
        extract($_POST);
        if (Connexion($login,$motDePasse)!=null) {
          $pyromane=connexion($login,$motDePasse);
            $_SESSION['id']=$pyromane['idUser'];
            $_SESSION['nom']=$pyromane['nomUser'];
            $_SESSION['prenom']=$pyromane['prenomUser'];
            $_SESSION['profile']=$pyromane['nomProfile'];
            header('location:Accueil.php');
        }else
         {
           echo '<h5><div class="cyan-text red darken-3 center-align">login ou password incorrect!!!</div></h5>';
        }

    }
    ?>