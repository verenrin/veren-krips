<?php

    session_start();
    define('BASE', 'BASE');
    
    require_once './utility/config.php';
    require_once './utility/db.php';
    require_once './utility/utility.php';


    if (isset($_GET['page'])) {
      $PageView = $_GET['page'];
    }

    if (!isset($_SESSION['isLogin'])) {
      $PageView = "login";
    } else {
      if(!isset($pages)){
        $pages = 'home';
      }else{
        if($pages =='login'){
          $pages ='home';
        }else{
          $pages = $pages;
        }
      }
    }

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Veren Krips bbb</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" src="./assets/css/main.css"/>

  </head>
  <body>

    <?php
      if (isset($_SESSION['isLogin'])) {
        require_once './view/components/navbar.php';
      }
    ?>

    <main class="container">
    <?php
      if (isset($_SESSION['isLogin'])) {
        // Do Something about loggedin pages
      } else {
        // give login page
        require_once './view/pages/login.php';
      }
    ?>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

      
  </body>
</html>
