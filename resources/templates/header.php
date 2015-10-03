<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
	  <link href="<?php echo LIBRARY_PATH ?>/materialize/css/materialize.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	  	  
<!--  	  <link href="resources/library/materialize/css/materialize.min.css" rel="stylesheet" type="text/css" />
 -->
	  <link href="css/style.css" rel="stylesheet" type="text/css" />


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <title>Reesha</title>

    </head>

    <body>

<nav class="teal lighten-1 header-style" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo">
    <!-- <img src="<?php echo IMG_PATH ?>/feather.svg"> -->
    Reesha</a>
      <!-- <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul> -->
<!--       <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
 -->      
<?php if(!isset($_SESSION['user'])) { ?>
  <a class="waves-effect waves-light btn modal-trigger right deep-orange" id="login-btn" href="#modal1">Login/Signup</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <?php     require_once(TEMPLATES_PATH . "/authentication.php");
 ?>
    </div>
  </div>
  <?php } else { ?>


  <a class='dropdown-button btn right deep-orange' href='#' id="profile-btn" data-activates='dropdown1'><?php echo  $_SESSION['first_name']; ?>  &darr;</a>

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="history.php">History</a></li>
    <li><a href="editInfo.php">Edit Info</a></li>
    <li class="divider"></li>
    <li><a href="resources/logic/logout.php">Logout</a></li>
  </ul>
          <?php } ?>
 </div>
  </nav>