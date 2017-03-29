<?php
// ------------------------------------------------------------------------
// Maak het onderstaande script werkend:
// Vul de code aan en zorg dat de include-bestanden in de juiste map staan
// ------------------------------------------------------------------------
$home = 'views/home.php';
// hier komen de instellingen van deze web app
include 'includes/config.php';

if (!empty($_GET)) {
    $page = $_GET['page'];
}else{
    $page = $home;
}

// hier komt de head sectie <head> etc.
include 'views/head.php';

// hier komt de header sectie etc.
include 'views/header.php';

// hier komt de navigatie
include 'views/menu.php';

switch ($page) {
  case 'about':
    include 'views/about.php';
  break;

  case 'articles':
    include 'views/articles.php';
  break;

  case 'contact':
    include 'views/contact.php';
  break;

  default:
    include 'views/home.php';
  break;
}
// hier komt de content van de home page

// hier komt de footer
include 'views/footer.php';

?>
