<?php
include_once '../header1.php';
?>
<nav class="teal">
    <div class="nav-wrapper">
      <div class="container">
       <marquee behavior="" direction=""><h5 style='font-family:serif;'>AlazharApp<h5></marquee>           
      </div>
    </div>
  </nav>
<nav class="transparent">   
    <div class="nav-wrapper">
      <div class="container">
        <a href="#" class="brand-logo red-text text-darken-2" style='font-family:serif;'>al azhar</a>
        <a href="#" class="button-collapse" data-activates='Mobile_Menu'>
           <i class="material-icons green-text">menu</i>  
        </a>
          <ul class="right hide-on-med-and-down">
          <li>
            <a href="inscription.php" class="white-text" style='font-family:serif;'>INSCRIPTION</a>
          </li>
          <li>
            <a href="page1.php"  class="white-text" style='font-family:serif;'>CLASSE</a>
          </li>
          <li>
            <a href="AdminPage.php"  class="white-text" style='font-family:serif;'>ADMINISTRATION</a>
          </li>
          <a href="?btndeconnexion" class="btn teal darken-2 waves-effect right-align hoverable" style='font-family:serif;'>deconnexion</a>
        </ul>
        <ul  class="side-nav" id="Mobile_Menu">
          <li>
            <a href="inscription.php" class="teal-text text-darken-2 hoverable">INSCRIPTION</a>
          </li>
          <li>
            <a href="page1.php"  class="teal-text text-darken-2 hoverable">CLASSE</a>
          </li>
          <li>
            <a href="AdminPage.php"  class="teal-text text-darken-2 hoverable">ADMINISTRATION</a>
          </li>
          <a href="?btndeconnexion" class="btn  waves-effect right-align hoverable">deconnexion</a>
        </ul>
      </div>
    </div>
  </nav>
 <?php
  include_once '../footer1.php';
 ?>
<?php
if (isset($_GET['btndeconnexion'])) {
  session_destroy();
  $_SESSION=[''];
  header('location:connexion.php');
}
if (empty($_SESSION)) {
   header('location:connexion.php');
}
?>
  <script>
$(document).ready(function () {
      $('.dropdown-button').dropdown({
        constrainWidth: false,
        hover: true,
        belowOrigin: true,
        alignment: 'left'
      });

      // JAVASCRIPT START HERE //
      $('.button-collapse').sideNav(); 
      $('.carousel').carousel();
    });
  </script>