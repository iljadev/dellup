<?php 
$printers = $product->GetPrinter($product_id);
    foreach ($printers as $printer){
      
    if($printer->model == "Dell"){
      $a = "
      <div class='panel panel-default pull-right' style= 'border:none;' >
<div class='panel-body' style='background-color:white;'><p align='center' style='font-size:30px; color:#3498db;'>Toode Info:</p>
  <ul class='list-group' style='border:none;'>
    <li class='list-group-item' style='border:none;'>
  
  <td align='center'><p style='color:#3498db;'>Printer Specifications:</p></td>
        <td align='left'>$printer->dell_printer_specs</td>
  </li>
     <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Scanning Specifications:</p></td>
        <td align='left'>$printer->dell_scan_specs</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Copy Speed:</p></td>
        <td align='left'>$printer->dell_copy_s</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Fax Specifications:</p></td>
        <td align='left'>$printer->dell_fax_specs</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Mobile Printing:</p></td>
        <td align='left'>$printer->dell_mobile_print</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Paper Handling:</p></td>
        <td align='left'>$printer->dell_paper_hand</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Standard media types, sizes and paper weights:</p></td>
        <td align='left'>$printer->dell_media</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Connectivity:</p></td>
        <td align='left'>$printer->dell_connect</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center' ><p style='color:#3498db;'>Operation Systems:</p></td>
        <td align='left'>$printer->dell_os</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Physical Specifications:</p></td>
        <td align='left'>$printer->dell_phys_specs</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Network:</p></td>
        <td align='left'>$printer->dell_network</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Security:</p></td>
        <td align='left'>$printer->dell_security</td>
  </li>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Operating Enviroment:</p></td>
        <td align='left'>$printer->dell_op_env</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Power:</p></td>
        <td align='left'>$printer->dell_power</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Consumables:</p></td>
        <td align='left'>$printer->dell_cosum</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Languages:</p></td>
        <td align='left'>$printer->dell_languages</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Pinter Management:</p></td>
        <td align='left'>$printer->dell_printer_manag</td>
  
  </li>
    <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Content in box:</p></td>
        <td align='left'>$printer->dell_in_box</td>
  
  </li>
  </ul>
</div>

  </div>
      
      ";
    }else{
    
      $a = "
      <div class='panel panel-default pull-right' style= 'border:none;' >
<div class='panel-body' style='background-color:white;'><p align='center' style='font-size:30px; color:#3498db;'>Toode Info:</p>
  <ul class='list-group' style='border:none;'>
    <li class='list-group-item' style='border:none;'>
  
  <td align='center'><p style='color:#3498db;'>Quick Specifications:</p></td>
        <td align='left'>$printer->printer_quick_specs</td>
  </li>
     <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>General:</p></td>
        <td align='left'>$printer->printer_general</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Copying:</p></td>
        <td align='left'>$printer->printer_copy</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Printing:</p></td>
        <td align='left'>$printer->printer_print</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Scanning:</p></td>
        <td align='left'>$printer->printer_scan</td>
  </li>
   <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Media Handling:</p></td>
        <td align='left'>$printer->printer_media_handling</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Connectivity:</p></td>
        <td align='left'>$printer->printer_connect</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>System Requirments:</p></td>
        <td align='left'>$printer->printer_sys_req</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center' ><p style='color:#3498db;'>Dimensions:</p></td>
        <td align='left'>$printer->printer_dimensions</td>
  </li>
  <li class='list-group-item' style='border:none;'>
  <td align='center'><p style='color:#3498db;'>Miscellaneous:</p></td>
        <td align='left'>$printer->printer_misc</td>
  </li>
  
  </ul>
</div>

  </div>
      
      ";
      
      
      
      
    }  
      
      
        $price = round($printer->price*1.2 ,2);
    echo "
    <div class='container' style='background-color:white;>
    <div class='jumbotron' style='background-color:white;'>
    
    <div class= 'col-sm-6 col-md-4'>
    <div class='panel-body' style='background-color:white;'><p align='center' style='font-size:30px; color:#3498db;'>$printer->name</p>
    <a data-toggle='modal' data-target='#PrinterModal'><img src='$printer->image' style='width:auto'></a>
    
    <p align='center' style='font-size:20px;'>Hind: $price €</p>
    
    <p align='center' style='width: 140px;' >
    <ul class= 'nav' >
    <li role='presentation' class='dropdown' >
    <a align='center'  class='dropdown-toggle' data-toggle='dropdown'  role='button' aria-haspopup='true' aria-expanded='false'>
      Järelmaksu kalkulaator</a>
    <ul  class='dropdown-menu'>
     
   <form class='form-signin' >
           <div class='input-group'>
    
    <input type='number'   id='sissemakse' class='form-control ' placeholder='Sissemakse €'  autofocus>
    <label hidden='true'  id='hind' for='$price'></label>
    
    <label align='left' style='width:80%; font-size:20px; color:#3498db;'>Kuude arv:</label><label align='center' style='width:20%; color:#3498db; font-size:20px;' id='kuu'>24</label>
    <input id ='kuud' oninput='myFunc()'  type='range' min='1' max='48' step='1' value='24'></br>
    <label align='center' class='btn_menu' style='width:100%; font-size:20px;' onclick='myFunction()' >Arvuta</label>
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
    
    $a

  
  </div>

    </div>";
    
    }?>
    <div class="modal  bs-example-modal-lg" id="PrinterModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog modal-lg">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       
      </div>
      <div class="modal-body" style ="height:300 px;">
  
        <div id="myCarousel3" class="carousel slide" >
      <!-- Indicators -->
      
      <div class="carousel-inner" role="listbox">
    
       <div class="item active">
        
            <p align="center"><img  src= "<?=$printer->image3;?>" style='width:auto;' ></p></br>
         
       </div>
        
    
         <?php
     $images = $product->GetImages($product_id);
      
     foreach ($images as $image){
      
       echo " <div class='item '><p align='center'><img  src='$image->img' style='width:auto;' ></p> </div>";
     }
     
     ?>
            
          
         
       
    
    </div>
     <div class="modal-footer">
         
      </div>
     <ul class="pager">
        <li><a href="#myCarousel3" role="button" data-slide="prev">Eelmine</a></li>
        <li><a href="#myCarousel3" role="button" data-slide="next">Järgmine</a></li>
     </ul>

    </div>
      
      </div><!-- /.modal-content -->
   
 </div>  
  </div>
</div>
         </div>