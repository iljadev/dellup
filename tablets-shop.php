<?php 
    $class = $_REQUEST["class"];
      
    if (isSet($_REQUEST["model"])){
      $model =  $_REQUEST["model"];
      
    }else if(!isSet($_REQUEST["model"])){
      
    if($class == "for work"){
          $model = "Latitude";
      }
    
        
     else {
          $model = "Venue";
      }
    
    
    }

    
    if (isSet($_REQUEST["page_nr"])){
      $page_nr =  $_REQUEST["page_nr"];
      
    }else{
      $page_nr = 1;
    }
    
    
    
    if (isSet($_REQUEST["type"])){
      $typee =  $_REQUEST["type"];
    }else{
      $typee = "tablet";
    }
    
    
    
    $pages = $product->GetPages($model,$typee,$class);
    $classes = $product->GetClasses($class,$typee);
    $products = $product->GetTablets($page_nr,$model,$class);
?>





 <div class="container" >

 
<div class="panel-group" id="accordion">
 <div class="panel panel-default">
      
        
  <nav class="navbar navbar-default" > 
    <div class="panel-heading">
  
          
    
    
    
          <div class="navbar-header" style="background-color:transparent;" >
            <button type="button" class="navbar-toggle collapsed" style="background-color:transparent;" data-toggle="collapse" data-target="#navbar_notebooks" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <p class="navbar-brand navbar-brand-mini" style="background-color:transparent; color:#3498db; font-size:20px;"  ><?php if(isSet($_REQUEST["model"])){ echo ( $_REQUEST["model"]); }else{if($class == "for work"){
          echo "Latitude";
      }
    
        
     else {
          echo "Venue";
      }}?></p>
          </div>
          <div id="navbar_notebooks" class="navbar-collapse collapse">
     
       
           
            <ul class="nav navbar-nav" >
       
<?php 
       
       foreach($classes as $clas){
         
         
      
        ?>
    <li><form action="index.php" method="post" >
    <input hidden="true" type="type" name="type" value="tablet">
      <input hidden="true" type="type" name="model" value="<?=$clas->model;?>">
    <input hidden="true" type="type" name="class" value="<?=$clas->clas;?>">
    <p align="center"><input type="submit" class="btn btn_search" style="background-color:transparent; color:#3498db;" value="<?=$clas->model;?>"></p>
    </form></li>
          
    
      <?php  }?>
            </ul>
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
     
   
 
 </nav>
 
 

 <div class="panel-collapse collapse in ">
    <div class="panel-body" >
     <?php 
     

    foreach($products as $product){
  if($product->comment == '') {
    $a = "</br>";
   }else{
    $a ="$product->comment";
   }
   $i=$product->id;
   
   if($product->qty > 0){
      $b = "Laos olemas";
   }else{
     $b = "Hetkel laos ei ole";
     
   }
   $price = round($product->price*1.2 ,2);
      
      
  
    echo "
      
      
  <div class='col-sm-6 col-md-4'>
   <div id='$i' class='carousel slide'  data-interval='false'>
   
    <ol class='carousel-indicators'>
      <li data-target='#$i' data-slide-to='0' class='active'></li>
      <li data-target='#$i' data-slide-to='1'></li>
     </ol>

   
    <div class='carousel-inner' role='listbox'>
      <div class='item active'>
       <div class='thumbnail thumbnail-device'>
     <table  class='table-condensed' style'border:none ;'>
   <tbody>
      <tr>
       <img class='device_img' src='$product->image2' style='height:35%'/>
     </tr>
   <tr>
   <p align='center'>$a</p>
   </br>
   </tr>
    <tr>
   <p ><h4 align='center'>$product->name</h4></p>
   </tr>
    <tr>
   <p><h4 align='center'>$price €</h4></p>
   </tr>
   <tr>
   <p align='center'>$b</p>
   </tr>
    <tr>
   <form action='index.php' method='post' >
   <p align='center'><input type='submit' class='btn  btn btn_menu' value='Vaata lähemalt &raquo;'></p>
    <p><input hidden='true' type='type' name='product_type' value='$product->type'><br></p>
    <p><input hidden='true' type='type' name='product_id' value='$product->id'><br></p>
    
  </form>
   </tr>
    
  
   </tbody>
   </table>
     

  
  
  
  
 </div>
      </div>

      <div class='item'>
        <div class='thumbnail thumbnail-device'>
    <img class='device_img' src='$product->image'/>
  <table  class='table-condensed' style'border:none ;'>
   <tbody>
      <tr>
        <td align='left'>OS:</td>
        <td align='left'>$product->os</td>
     </tr>
    <tr>
        <td align='left'>CPU:</td>
        <td align='left'>$product->cpu</td>
     </tr>
   <tr>
        <td align='left'>RAM:</td>
        <td align='left'>$product->ram</td>
     </tr>
    <tr>
        <td align='left'>Hard Drive:</td>
        <td align='left'>$product->hdd</td>
     </tr>
    <tr>
        <td align='left'>Display:</td>
        <td align='left'>$product->display</td>
     </tr>
     <tr>
        <td align='left'>Video Card:</td>
        <td align='left'>$product->videocard</td>
     </tr>
  
  
  </tbody>
  </table></br>
  
  
 </div>
      </div>
    
    </div>

    
  </div>
    
  </div>  ";
  }
  
   ?></div><?php
  
  

  foreach($pages as $page){
    $pag = round($page->id/12);
    
    if ($pag > 1){?>
  
    
    
        
    <nav  >
    <ul class="pager " >

    <?php
    for($i = 1; $i < $pag + 1; $i++){
    if($page_nr == $i){
      echo"<li><span class='pagination pagination-sm' aria-hidden='false' style='height:6%; border:none;'><form   action='index.php' method='post' >
      <input hidden='true' type='type' name='type' value='tablet'>
    <input hidden='true' type='type' name='model' value='$model' >
    <input hidden='true' type='type' name='class' value='$class' >
    <input hidden='true' type='type' name='page_nr' value='$i'>
    <input type='submit' class='btn  btn btn_search' style='background-color:#3498db; color:white;' value='$i'>
    </form></span></li>";
    }else{
    echo"<li><span class='pagination pagination-sm' aria-hidden='false' style='height:6%; border:none;'><form   action='index.php' method='post' >
      <input hidden='true' type='type' name='type' value='tablet'>
    <input hidden='true' type='type' name='model' value='$model' >
    <input hidden='true' type='type' name='class' value='$class' >
    <input hidden='true' type='type' name='page_nr' value='$i'>
    <input type='submit' class='btn  btn btn_search' style='background-color:transparent; color:#3498db;' value='$i'>
    </form></span></li>";
      }}?>

  </ul>


       </nav> 



    <?php
    }
  } ?>
  
    
      


      </div>
  </div>
    
  


    </div>