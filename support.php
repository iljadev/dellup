<?php
require_once("functions.php");

if(isSet($_REQUEST["search"])){
$s = $_REQUEST["search"];}else{
$s = "";
}
?>
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


  
  
  
  </head>

  <body>
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
    <input hidden="true" type="type" name="class" value="for work">
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
  <div id="top"></div>
<?php
if(isSet($_REQUEST["search"])){
        $s = $_REQUEST["search"];
        include("search.php");
      }else{
        if (isSet($_REQUEST["person_name"])){
          
          
$to = "support@dellup.eu";
$subject = "Uus Probleem";
$txt = "Tuli uus probleem, saatjaks on: ".$_REQUEST["person_name"]." , ning tema kontakt andmed on: ".$_REQUEST["person_email"]." ja probleem on järgmine: ".$_REQUEST["sonum"];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset="utf-8"' . "\r\n";
$headers .= "From:(DellUP Info) no-reply@dellup.eu" . "\r\n" .
"CC: ilja.lebedev@dellup.eu";

mail($to,$subject,$txt,$headers);
          
        
          
          echo " <div class='container'><div class='alert alert-info' role='alert'><p  align='center'><strong>Aitäh saatmise eest! Teiega võetakse varsti ühendust!</strong></p></div></div>";
          
        }else{
    


 ?>
<div class='container'  style='background-color:white;'>
      <div class='jumbotron' style='background-color:white;'>
      
      
      
    
    <p align='center' style='font-size:30px; color:#3498db;'>Kirjutage Teie Probleemist</p>
      <form class='form-signin' style="margin-top:-15px;">
    
    <input type='text'   name='person_name' class='form-control ' placeholder='Teie nimi*' required autofocus>
    
    <input type='email' name='person_email' class='form-control' placeholder='Email address*' required >
      
        <textarea  rows="10" cols="50" name='sonum' class='form-control' placeholder='Probleem*' required ></textarea>
        </br>
    </br>
    <p align='center'><button class='btn  btn_menu' type='submit' style='width: 140px;'>Saada</button><p>
      </form>
    
    
    </div>
</div> <!-- /container -->

      <?php }} ?>
 
  <!-- Footer -->
    <footer id="footer">
    
        <div class="container">
    
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
        <a href="#top">Algusesse</a>
                    <h4><strong>DellUP OÜ</strong>
                    </h4>
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

 
 
 
 