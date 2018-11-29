 <?php

   $desktops = $product->GetDesktop($product_id);
    foreach ($desktops as $desktop){
      $price = round($desktop->price*1.2 ,2);
    echo "
    <div class='container' style='background-color:white;>
    <div class='jumbotron' style='background-color:white;'>
    
    <div class= 'col-sm-6 col-md-4'>
    <div class='panel-body' style='background-color:white;'><p align='center' style='font-size:30px; color:#3498db;'>$desktop->name</p>
    <a data-toggle='modal' data-target='#desktopModal'><img src='$desktop->image' style='width:auto'></a>
    
    <p align='center' style='font-size:20px;'>Hind: $price €</p>
    
      <p align='center' style='width: 140px;' >
    <ul class= 'nav' >
    <li role='presentation' class='dropdown' >
    <a align='center'  class='dropdown-toggle' data-toggle='dropdown'  role='button' aria-haspopup='true' aria-expanded='false'>
      Järelmaksu kalkulaator</a>
    <ul  class='dropdown-menu'>
     
   <form class='form-signin' >
           <div class='input-group'>
    
    <input type='number'  min='1' id='sissemakse' class='form-control ' placeholder='Sissemakse €'  autofocus>
    <label hidden='true'  id='hind' for='$price'></label>
    
    <label align='left' style='width:80%; font-size:20px; color:#3498db;'>Kuude arv:</label><label align='center' style='width:20%; color:#3498db; font-size:20px;' id='kuu'>24</label>
    <input id ='kuud' oninput='myFunc()'  type='range' min='1' max='48' step='1' value='24'></br>
    <label align='center' class='btn_search' style='width:100%; font-size:20px;' onclick='myFunction()' >Arvuta</label>
    </br>
       <p align='center'><label id='answer' ></label><p>
       </div>
     </form>
    
     
    </ul>
  </li>
    </ul></p> 
      
      
    <form action='index.php' method='post'>
    <p align='center'><input type='submit' class='btn btn-success' value='Telli' style='width: 140px;'></p>
    <p><input hidden='true' type='type' name='buy' value='buy'><br></p>
    <p><input hidden='true' type='type' name='product_id' value='$product_id'><br></p>
      </form></div>
    </div>
    
    <div class='col-sm-8 .col-md-8'>
    
    

    
    <div class='panel panel-default pull-right' style= 'border:none;' >
<div class='panel-body' style='background-color:white;'><p align='center' style='font-size:30px; color:#3498db;'>Toode Info:</p>
  <ul class='list-group' style='border:none;'>
    <li class='list-group-item' style='border:none;'>
  
  <td align='center'><p style='color:#3498db;'>OS:</p></td>
        <td align='left'>$desktop->os</td>
  </li>
     <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>CPU:</p></td>
        <td align='left'>$desktop->cpu</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>RAM:</p></td>
        <td align='left'>$desktop->ram</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Hard Drive:</p></td>
        <td align='left'>$desktop->memory</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Optical Drive:</p></td>
        <td align='left'>$desktop->opticaldrive</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Display:</p></td>
        <td align='left'>$desktop->display</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Video Card:</p></td>
        <td align='left'>$desktop->videocard</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Sound Card:</p></td>
        <td align='left'>$desktop->soundcard</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center' ><p style='color:#3498db;'>Productivity Software:</p></td>
        <td align='left'>$desktop->produsoft</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Security Software:</p></td>
        <td align='left'>$desktop->secusoft</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Keyboard:</p></td>
        <td align='left'>$desktop->keyboard</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Mouse:</p></td>
        <td align='left'>$desktop->mouse</td>
  </li>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Wireless:</p></td>
        <td align='left'>$desktop->wireless</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Ports:</p></td>
        <td align='left'>$desktop->ports</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Slots:</p></td>
        <td align='left'>$desktop->slots</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Chassis:</p></td>
        <td align='left'>$desktop->chassis</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Dimensions:</p></td>
        <td align='left'>$desktop->dimensions</td>
  
  
  
  </ul>
</div>

  </div>
  
  </div>
  
    </div>";
    
    }?>
    <div class="modal  bs-example-modal-lg" id="desktopModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog modal-lg">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body" style ="height:device-height;">
  
        <div id="myCarousel1" class="carousel slide" >
      <!-- Indicators -->
      
      <div class="carousel-inner" role="listbox">
    
       <div class="item active">
        
            <p align="center"><img  src= "<?=$desktop->image3;?>" style='width:100%;' ></p></br>
         
       </div>
        
    
         <?php
     $images = $product->GetImages($product_id);
      
     if(count($images) == 0){ ?>
       </div>
     <div class="modal-footer">
      </div>
     
    <?php }  else {
      
     foreach ($images as $image){
      
       echo " <div class='item '><p align='center'><img  src='$image->img' style='width:100%;' ></p> </div>";
     }
        
  
     ?>
            
          
         
       
    
    </div>
     <div class="modal-footer">
       <ul class="pager">
        <li><a href="#myCarousel1" role="button" data-slide="prev">Eelmine</a></li>
        <li><a href="#myCarousel1" role="button" data-slide="next">Järgmine</a></li>
     </ul>  
      </div>
          
      <?php } ?>

    </div>
     
      </div><!-- /.modal-content -->
   
 </div>  
  </div>
</div>
  