<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Ilja Lebedev">
  <link rel="shortcut icon" type="image/x-icon" href="img/dellup2.png" />
    <title>DellUP</title>

    <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <link href="css/main_page.css" rel="stylesheet">
  
  


  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script>
function myFunction() {
  
  var x = "Järelmaksu summa kuus: ";
  var y = " €";
  var a = document.getElementById("hind").htmlFor;
  
  var size = document.getElementById("kuud").value;
  
  document.getElementById("answer").innerHTML = (x + ((((a - document.getElementById("sissemakse").value).toFixed(2))*1.2).toFixed(2)/size).toFixed(2) + y );
  
}
function myFunc() {
  
  
  
  var size = document.getElementById("kuud").value;
  document.getElementById("kuu").innerHTML = size;
   

  
  
}

 

</script>
  
  
  
  </head>

  <body>
  <div id="top"></div>
<?php

require_once("functions.php");




    
if(isSet($_REQUEST["type"]) or isSet($_REQUEST["search"]) or isSet($_REQUEST["product_id"])){
    $s = "";
   
   if(isSet($_REQUEST["product_id"]))
   {
  $product_id =  $_REQUEST["product_id"];
   
   if (isSet($_REQUEST["buy"])){
      echo "
       <div class='container'  style='background-color:white;'>
    <p align='center' style='font-size:30px; color:#3498db;'>Tellimiseks palun sisestage oma andmed!</p>
      <form class='form-signin' >
    
    <input type='text'   name='client_fname' class='form-control ' placeholder='Eesnimi*' required autofocus>
    
        <input type='text'   name='client_lname' class='form-control' placeholder='Perekonnanimi*' required>
    
    <input type='number' size='11' name='client_id' class='form-control' placeholder='Isikukood*' required>
    
        <input type='email' name='client_email' class='form-control' placeholder='Email address*' required >
      
        <input type='number'  name='client_phone' class='form-control' placeholder='Telefon*' required >
        
        <input type='text' name='client_address' class='form-control' placeholder='Aadress'>
      
      <input type='text' name='client_town' class='form-control' placeholder='Linn'>
    
    <input type='text' name='client_maakond' class='form-control' placeholder='Maakond'>
    
    <input type='text' name='client_riik'  class='form-control ' placeholder='Riik'>
    
    <input hidden='true'  name='telli' value='telli'><br>
    <input hidden='true'  name='product_id' value='$product_id'><br>
    
        <p align='center'><button class='btn btn-lg btn-primary btn-block' type='submit' style='width: 140px;'>Telli</button><p>
      </form>

    </div> <!-- /container -->


      
      
      ";
    
   }
  if(isSet($_REQUEST["telli"])){
    $notice = $order->AddOrder($product_id,$_REQUEST["client_fname"],$_REQUEST["client_lname"],$_REQUEST["client_id"],$_REQUEST["client_email"],$_REQUEST["client_phone"],$_REQUEST["client_address"],$_REQUEST["client_town"],$_REQUEST["client_maakond"],$_REQUEST["client_riik"]);
  
      if($notice == ""){
        
$to = "shop@dellup.eu";
$subject = "Uus Tellimus";
$txt = "Telliti toode nr ".$product_id.". Tellijaks on ".$_REQUEST["client_fname"]." ".$_REQUEST["client_lname"]." , ning tema kontakt andmed on: ".$_REQUEST["client_email"]." ja ".$_REQUEST["client_phone"]." !";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset="utf-8"' . "\r\n";
$headers .= "From:(DellUP Info) no-reply@dellup.eu" . "\r\n" .
"CC: ilja.lebedev@dellup.eu";

mail($to,$subject,$txt,$headers);
      
  


      echo " <div class='container'><div class='alert alert-info' role='alert'><p  align='center'><strong>Aitäh Tellimuse Eest. Teiega Võetakse Varsti ühendust!</strong></p></div></div>";
    }else{
      echo "<div class='container'><div class='alert alert-danger' role='alert'><p align='center'><strong>Oops! Midagi läks valesti!</strong></p></div></div>";
    }
  
  }
  
  
  
  else if(isSet($_REQUEST["product_type"])){
  $product_type =  $_REQUEST["product_type"];

  
  if($product_type = "notebook"){
    
     include("notebooks.php");
  
  }
  if($product_type = "desktop"){
  include("desktops.php");
 
 
  }
  if($product_type = "tablet"){
  include("tablets.php");
}  
      if($product_type = "printer"){
 include("printers.php");
        
}  
   
   }}else if (isSet($_REQUEST["search"])){
     $s = $_REQUEST["search"];
     include("search.php");
   }
   else{
    
   
   if($_REQUEST["type"] == "notebook")
  {
    
    include("notebooks-shop.php");
  }
  
  if($_REQUEST["type"] == "desktop"){
    include("desktops-shop.php");
  }
  if($_REQUEST["type"] == "tablet"){
    include("tablets-shop.php");
  }
  if($_REQUEST["type"] == "printer"){
    include("printers-shop.php");
  }
  if($_REQUEST["type"] == "monitor"){
    include("monitors-shop.php");
  }
   if($_REQUEST["type"] == "accessories"){
    include("accessories-shop.php");
  }
   
   }
   
   
   
  
   ?>
   <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

         <a href="index.php"><img class="navbar-left pull-left" src="img/dellup.png"  /></a>
     

        </div>
        
    
    
    
        <div id="navbar" class="navbar-collapse collapse">
    
    
        
    <!--  <form class="navbar-form  navbar-right" >
    <input type="submit" class="btn btn-success " value="Logi Sisse">
     </form> -->
     <ul class="nav navbar-nav navbar-left">
     
     <li><a href="index.php" style="color:#3498db; font-size:20px;">Avaleht</a></li>
     
    
     
     <li style="color:#3498db; font-size:20px;">
        <a class="dropdown-toggle" data-toggle="dropdown" style="color:#3498db; font-size:20px;" role="button">
      Tööle
      </a>
      <ul class="dropdown-menu">
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="notebook">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Sülearvutid"></p>
    
    </form>
      </li>
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="desktop">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Lauaarvutid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="tablet">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Tahvelarvutid"></p>
    
    </form>
      </li>
      
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="printer">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Printerid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="monitor">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Monitorid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="accessories">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Aksessuaarid"></p>
    
    </form>
      </li>
      </ul>
      </li>
      
      <li style="color:#3498db; font-size:20px;">
        <a class="dropdown-toggle" data-toggle="dropdown" style="color:#3498db; font-size:20px;" role="button">
      Koju
      </a>
      <ul class="dropdown-menu">
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="notebook">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Sülearvutid"></p>
    
    </form>
      </li>
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="desktop">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Lauaarvutid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="tablet">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Tahvelarvutid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="printer">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Printerid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="monitor">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Monitorid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="accessories">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Aksessuaarid"></p>
    
    </form>
      </li>
      </ul>
      </li>
      <li><a href="support.php"  style="color:#3498db; font-size:20px;">Tugi</a></li>
       <li><a href="contact.php"  style="color:#3498db; font-size:20px;">Kontakt</a></li>
       
     </ul>
     <ul class="nav navbar-nav navbar-right">
     
    
      <!--<li><a href="../navbar-static-top/ "class="navbar-brand" style="color:#3498db; font-size:20px;">Meist</a></li>-->
           
      <!--<li><a href="./" class=" navbar-brand" style="color:#3498db; font-size:20px;">Tugi</a></li>-->
      
           
    </ul>
    
 <form class="navbar-form navbar-right" >
           <div class="input-group">
      <input type="text" class="form-control" name="search" value="<?=$s;?>" placeholder="Otsi toode">
      <span class="input-group-btn">
       <input type="submit" class="btn btn_search"  value="Otsi">
      </span>
     </div><!-- /input-group -->
  </form>
         
    
    
    
       
      
          
     
          
         
      
      
        </div><!--/.nav-collapse -->
      </div>
    </nav>
   
   
   <?php
   
   
   
  
  
 } else{?>
 
 <?php 
        
 
 
      if(isSet($_REQUEST["search"])){
        $s = $_REQUEST["search"];
      }else{
        $s = "";
      }
    ?>
 
 
 
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

         
     <a href="index.php"><img class="navbar-left pull-left" src="img/dellup.png"  /></a>
      
    
        </div>
  
    
        <div id="navbar" class="navbar-collapse collapse">
    
       
     
    <!--  <form class="navbar-form  navbar-right" >
    <input type="submit" class="btn btn-success " value="Logi Sisse">
     </form> -->
    
     <ul class="nav navbar-nav navbar-left"> 
      <li   style="color:#3498db; font-size:20px;">
        <a  class="dropdown-toggle " data-toggle="dropdown" style="color:#3498db; font-size:20px;" role="button" >
      Tööle</a>
      <ul class="dropdown-menu">
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="notebook">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Sülearvutid"></p>
    
    </form>
      </li>
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="desktop">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Lauaarvutid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="tablet">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Tahvelarvutid"></p>
    
    </form>
      </li>
      
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="printer">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Printerid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="monitor">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Monitorid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="accessories">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Aksessuaarid"></p>
    
    </form>
      </li>
      </ul>
      </li>
      
      <li  style="color:#3498db; font-size:20px;">
        <a class="dropdown-toggle" data-toggle="dropdown" style="color:#3498db; font-size:20px;" role="button" >
      Koju
      </a>
      <ul class="dropdown-menu">
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="notebook">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Sülearvutid"></p>
    
    </form>
      </li>
      <li>
       <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="desktop">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Lauaarvutid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="tablet">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Tahvelarvutid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="printer">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Printerid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="monitor">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Monitorid"></p>
    
    </form>
      </li>
      <li>
      <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="accessories">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn btn_menu" style="background-color: transparent; color:#3498db;" value="Aksessuaarid"></p>
    
    </form>
      </li>
      </ul>
      </li>
      <li><a href="support.php"  style="color:#3498db; font-size:20px;">Tugi</a></li>
      <li><a href="contact.php"  style="color:#3498db; font-size:20px;">Kontakt</a></li>
      
     </ul>
    
      
    
        <ul class="nav navbar-nav navbar-right"> 
            <!--<li><a href="../navbar-static-top/ "class="navbar-brand" style="color:#3498db; font-size:20px;">Meist</a></li>-->
            
      <!--<li><a href="./" class=" navbar-brand" style="color:#3498db; font-size:20px;">Tugi</a></li>-->
    </ul>
      
    
 
     <form class="navbar-form navbar-right" >
           <div class="input-group">
      <input type="text" class="form-control" name="search" value="<?=$s;?>">
      <span class="input-group-btn">
       <input type="submit" class="btn btn_search"  value="Otsi">
      </span>
     </div><!-- /input-group -->

         </form>
    
          
     
          
         
      
      
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 
 
 
    <div class="container" >

  
  
  
  
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron" style="background-color:#3498db; color:white; min-height:50px" >
      <p style="font-size:50px;" align="center">Tere tulemast Dell seadmete poodi!</p>
       
    </div>
  

<div class="row">

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail " style="height:300px;">
  
  
      <div class='item '>
      <img  src="img/notebooks/laptop-xps-15.png" style='height:150px;' >
    </div>
    
    
    

     
  <div class="caption">
        <h3 align="center">Sülearvutid ja 2-in-1</h3>
    <table align="center" style="width: 300px;">
    <td >
         <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="notebook">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Tööle &raquo;"></p>
    
    </form>
       </td>
     <td>
     <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="notebook">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Koju &raquo;"></p></form>
     </td>
     </table>
    </div>
     </div>
      </div>
  
  

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:300px;">
  
  
     <div class='item '>
     <img  src="img/desktops/desktop-precision-7000-series.png"  style='height:150px;'>
    </div>

     
     
     
  <div class="caption">
        <h3 align="center">Lauaarvutid</h3>
        <table align="center" style="width: 300px;">
    <td >
         <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="desktop">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Tööle &raquo;"></p>
    
    </form>
       </td>
     <td>
     <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="desktop">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Koju &raquo;"></p>
    </form>
     </td>
     </table>
    
       </div>
     </div>
    
      </div>
 
  
  
    <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:300px;">
  
  
     <div class='item '>
     <img  src="img/tablets/venue-tablet-pro.png" style='height:150px;' >
    </div>
     
     
  <div class="caption">
        <h3 align="center">Tahvelarvutid</h3>
         <table align="center" style="width: 300px;">
    <td >
         <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="tablet">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Tööle &raquo;"></p>
    
    </form>
       </td>
     <td>
     <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="tablet">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Koju &raquo;"></p>
    </form>
     </td>
     </table>
    
       </div>
     </div>
    
      </div>
  
   
  
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:300px;">
  
  
     <div class='item '>
     <img  src="img/printers/esileht.png" style='height:150px;' >
    </div>
     
     
  <div class="caption">
        <h3 align="center">Printerid</h3>
          <table align="center" style="width: 300px;">
    <td >
         <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="printer">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Tööle &raquo;"></p>
    
    </form>
       </td>
     <td>
     <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="printer">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Koju &raquo;"></p>
    </form>
     </td>
     </table>
       </div>
     </div>
    
      </div>
  
      <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:300px;">
  
  
     <div class='item '>
     <img  src="img/monitors/esileht.png" style='height:150px;' >
    </div>
     
     
  <div class="caption">
        <h3 align="center">Monitorid</h3>
           <table align="center" style="width: 300px;">
    <td >
         <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="monitor">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Tööle &raquo;"></p>
    
    </form>
       </td>
     <td>
     <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="monitor">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Koju &raquo;"></p>
    </form>
     </td>
     </table>
    
       </div>
     </div>
    
      </div>
  
   <div class="col-sm-6 col-md-4">
    <div class="thumbnail" style="height:300px;">
  
  
     <div class='item '>
     <img  src="img/accessories/esileht.jpg"  style='height:150px;' >
    </div>
     
     
  <div class="caption">
        <h3 align="center">Aksessuaarid</h3>
           <table align="center" style="width: 300px;">
    <td >
         <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="accessories">
    <input hidden="true" type="type" name="class" value="for work">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Tööle &raquo;"></p>
    
    </form>
       </td>
     <td>
     <form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="accessories">
    <input hidden="true" type="type" name="class" value="for home">
    <p align="center"><input type="submit" class="btn  btn btn_choose" value="Koju &raquo;"></p>
    </form>
     </td>
     </table>
    
       </div>
     </div>
    
      </div>
  

  </div>



     
    
    </div> <!-- /container -->
  </br></br>
<?php } ?>  
  
    <!-- Modal -->

  

    <!-- Footer -->
     <footer id="footer">
    
        <div class="container">
    
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
        <a href="#top">Algusesse</a>
                    <h4><strong>DellUP OÜ</strong></h4>
                  <img src="img/dellup-2.png"  />
          <p>Reg nr: 12513590</p>
                  <p>IBAN: EE831010220235602221 SEB Pank</p>
                    <p>Pärnu mnt 139 C<br>Tallinn, Estonia</p>
                    <p><a href="mailto:info@dellup.eu">info@dellup.eu</a></p>
                    <p class="text-muted">Copyright &copy; <a href="mailto:ilja.lebedev@dellup.eu">Ilja Lebedev</a> 2016</p>
                </div>
            </div>
        </div>
    </footer>
  
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>



  

  
  
  </body>
</html>
