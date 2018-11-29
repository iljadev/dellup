<?php 

		if (isSet($_REQUEST["search"])){
		  $s =  $_REQUEST["search"];
		}else{
		  $s = "";
		}
		
		$types = $product->GetTypes($s);
		
		if (isSet($_REQUEST["model"])){
		  $typee =  $_REQUEST["model"];
		}else{
		  $typee = "";
		  
		}
		
		$products = $product->GetProducts($s,$typee);
		
		
?>





 <div class="container" >
 
  <?php
			 if (count($types) == 0){
					 echo "<div class='alert alert-danger' role='alert'><p align='center'><strong>Oops! Nothing found!</strong></p></div>";
					
			 }	

 
			 if (count($types) > 0){			 
  ?>
				 
 
 
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
            <p class="navbar-brand navbar-brand-mini" style="background-color:transparent; color:#3498db; font-size:20px;"  ><?php if(isSet($_REQUEST["model"])){ echo ( $_REQUEST["model"]."s"); }?></p>
          </div>
          <div id="navbar_notebooks" class="navbar-collapse collapse">
		 
		   
           
            <ul class="nav navbar-nav" >
			<?php 
			 
			 foreach($types as $type){
				 
				 
			
		    ?>
		<li><form action="index.php" method="post" >
	    <input hidden="true" type="type" name="model" value="<?=$type->type;?>">
		<input hidden="true" type="type" name="search" value="<?=$s;?>">
		<p align="center"><input type="submit" class="btn btn_search" style="background-color:transparent; color:#3498db;" value="<?=$type->type.'s';?>"></p>
		</form></li>
          
		
			<?php	}?>
		
            </ul>
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
     
	 
 
 </nav>
 
 	

 <div class="panel-collapse collapse in ">
	  <div class="panel-body" >
		 <?php 
	if (!isSet($_REQUEST["model"])){
		 echo "<div class='alert alert-info' role='alert'><p  align='center'><strong>Palun valige toote kategooria!</strong></p></div>";
	}else{
	 

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
	
		  
		  
	       
		echo "
		  
		  
	<div class='col-sm-6 col-md-4'>
	 <div id='$i' class='carousel slide'  data-interval='false'>
   


   
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
	 <p><h4 align='center'>$product->price €</h4></p>
	 </tr>
	  <tr>
	 <form action='index.php' method='post' >
		<p><input hidden='true' type='type' name='product_type' value='$product->type'><br></p>
		<p><input hidden='true' type='type' name='product_id' value='$product->id'><br></p>
		<p align='center'><input type='submit' class='btn  btn btn_menu' value='Vaata lähemalt &raquo;'></p>
	</form>
	 </tr>
	  <tr>
	 <p align='center'>$b</p>
	 </tr>
	
	 </tbody>
	 </table>
	   

	
	
	
	
 </div>
      </div>

     
    
    </div>

    
  </div>
    
  </div>  ";
	}
	} 
   ?></div>
  

  
		
      


      </div>
  </div>
		
	


    </div>
	<?php	}?>
	</div>
	
	