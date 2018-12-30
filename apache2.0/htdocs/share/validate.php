<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fast Share</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./material/css/materialize.min.css">
    <script src="./material/js/materialize.min.js"></script>
    <link rel="stylesheet" href="./material/css/flexbox.css">
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara|Julius+Sans+One|Rokkitt" rel="stylesheet">
    <style>
       /* fallback */
@font-face {
    font-family: 'Material Icons';
    font-style: normal;
    font-weight: 400;
    src: url(./material/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
  }
  
  .material-icons {
    font-family: 'Material Icons';
    font-weight: normal;
    font-style: normal;
    font-size: 24px;
    line-height: 1;
    letter-spacing: normal;
    text-transform: none;
    display: inline-block;
    white-space: nowrap;
    word-wrap: normal;
    direction: ltr;
    -webkit-font-feature-settings: 'liga';
    -webkit-font-smoothing: antialiased;
  }
  body{
    background-color:#ad1457 ;
    color:#fff;
    font-family: 'Hind Vadodara', sans-serif;
  }
    </style>
</head>
<body>

<nav class="blue">
    <div class="nav-wrapper">
      <a href="#" style="padding:0px 10px;font-family: 'Julius Sans One', sans-serif;" class="brand-logo"> Fast Share</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="http://localhost:8345/index.php">Home</a></li>
        <li><a href="http://localhost:8345/share/push.php">Send</a></li>
        <li><a href="http://localhost:8345/share/get.php">Recieve</a></li>
      </ul>
    </div>
  </nav>

<section class="container">

<br><br>
<br>
  <?php 
  error_reporting(0);
     if(isset($_GET['ip'])){
      function get_contents() {
        $url = "http://".$_GET['ip'].":8345/index.php";
        file_get_contents($url);
        var_dump($http_response_header[0]);
        }
        ?>

        <h3 id="ress"><?php get_contents(); ?></h3>
       <?php
        
         ?>
        <script>     
           //location.href='http://<?php echo $_GET['ip'] ?>:8345/share/get.php?ip=<?php echo $_GET['ip'] ?>';
           window.open('http://<?php echo $_GET['ip'] ?>:8345/share/get.php?ip=<?php echo $_GET['ip'] ?>', '_blank');
        </script>
        <?php
     }
     else{
    
     }
  ?>
  

  <br>
  <p>Make sure the Status Code is 200 OK.</p>
  <p>If not Try Again...By Making sure you are connected to same WiFi network.</p>
  <br>
  <button class="btn"><a style="color:#fff" href="http://localhost:8345/share/recieve.php">Retry</a></button>
  <br><br>
</section>


</body>
</html>

