<?php
class Product {
  
    private $connection;
  
  // __construct käivitatakse automaatselt esimesena
  function __construct($mysqli){
    
    $this->connection = $mysqli;
  
  }
function GetPages($modell,$typee,$class)  {
      $stmt = $this->connection->prepare("select count(id) from assets where model = ? and type = ? and class like ?");
    $stmt->bind_param("sss",$modell,$typee ,$class);
    $stmt->bind_result($count_id);
    $stmt->execute();
    
     $pages = array();
    
    //käime ühe rea haaval läbi
    while($stmt->fetch()){
    
      $page = new StdClass;
      $page->id = $count_id;
      
      
      array_push($pages,$page);
      
    
    }
  
    return $pages;
}
function GetImages($id){
  
  $stmt =$this->connection->prepare("SELECT  img FROM assets_images where  assets_id = ?");
  $stmt->bind_param("i", $id);
  $stmt->bind_result($imag);
  $stmt->execute();
  
  $images = array();
  
    while($stmt->fetch()){
      
      $image = new StdClass();
      
      
      $image->img = $imag;
      
      
      
      array_push($images,$image);
      
      
    }
  
  return $images;
  
  
  
}
function GetNotebook($id){
  
    $stmt =$this->connection->prepare("SELECT * FROM assets inner join notebooks on assets.id = notebooks.id WHERE assets.id=?");
    $stmt->bind_param("i", $id);
    $stmt->bind_result($assets_id, $name, $model, $type, $price, $qty ,$image,$image2,$image3,$comment,$class,$notebooks_id, $cpu,$os,$ram,$memory,$videocard,$produsoft,$secusoft,$display,$keyboard,$ports,$slots,$chassis,$dimensions,$wireless,$battery);
    $stmt->execute();
    $notebooks = array();
    // Kas kasutaja on olemas
    if($stmt->fetch()){
      
      $notebook = new StdClass();
      $notebook->assets_id = $assets_id;
      $notebook->name = $name;
      $notebook->model = $model;
      $notebook->type = $type;
      $notebook->price = $price;
      $notebook->qty = $qty;
      $notebook->image = $image;
      $notebook->image2 = $image2;
      $notebook->image3 = $image3;
      $notebook->comment = $comment;
      $notebook->classe = $class;
      $notebook->notebooks_id = $notebooks_id;
      $notebook->cpu = $cpu;
      $notebook->os = $os;
      $notebook->ram = $ram;
      $notebook->memory = $memory;
      $notebook->videocard = $videocard;
      $notebook->produsoft = $produsoft;
      $notebook->secusoft = $secusoft;
      $notebook->display = $display;
      $notebook->keyboard = $keyboard;
      $notebook->ports = $ports;
      $notebook->slots = $slots;
      $notebook->chassis = $chassis;
      $notebook->dimensions = $dimensions;
      $notebook->wireless = $wireless;
      $notebook->battery = $battery;
      
      
      
      array_push($notebooks,$notebook);
      
      
    }
  
  return $notebooks;
  }
function GetDesktop($id){
    $stmt =$this->connection->prepare("SELECT * FROM assets inner join desktops on assets.id = desktops.id WHERE assets.id=?");
    $stmt->bind_param("i", $id);
    $stmt->bind_result($assets_id, $name, $model, $type, $price, $qty ,$image,$image2,$image3,$comment,$class,$desktops_id, $cpu,$os, $produsoft,$secusoft, $ram,$memory,$videocard,$opticaldrive,$ports,$slots,$chassis,$dimensions,$soundcard,$wireless,$keyboard,$mouse,$display);
    $stmt->execute();
    $desktops = array();
    // Kas kasutaja on olemas
    if($stmt->fetch()){
      
      $desktop = new StdClass();
      $desktop->assets_id = $assets_id;
      $desktop->name = $name;
      $desktop->model = $model;
      $desktop->type = $type;
      $desktop->price = $price;
      $desktop->qty = $qty;
      $desktop->image = $image;
      $desktop->image2 = $image2;
      $desktop->image3 = $image3;
      $desktop->comment = $comment;
      $desktop->classe = $class;
      $desktop->desktops_id = $desktops_id;
      $desktop->cpu = $cpu;
      $desktop->os = $os;
      $desktop->produsoft = $produsoft;
      $desktop->secusoft = $secusoft;
      $desktop->ram = $ram;
      $desktop->memory = $memory;
      $desktop->videocard = $videocard;
      $desktop->opticaldrive = $opticaldrive;
      $desktop->ports = $ports;
      $desktop->slots = $slots;
      $desktop->chassis = $chassis;
      $desktop->dimensions = $dimensions;
      $desktop->soundcard = $soundcard;
      $desktop->wireless = $wireless;
      $desktop->keyboard = $keyboard;
      $desktop->mouse = $mouse;
      $desktop->display = $display;
      
      
      
      
      
      array_push($desktops,$desktop);
      
      
    }
  
  return $desktops;
  


}

function GetTablet($id){
  $stmt =$this->connection->prepare("SELECT * FROM assets inner join tablets on assets.id = tablets.id WHERE assets.id=?");
    $stmt->bind_param("i", $id);
    $stmt->bind_result($assets_id, $name, $model, $type, $price, $qty ,$image,$image2,$image3,$comment,$class,$tablets_id, $cpu,$os, $ram,$memory,$videocard,$display,$ports,$slots,$dimensions,$webcam,$mobilecon,$produsoft,$secusoft,$security,$wireless);
    $stmt->execute();
    $tablets = array();
    // Kas kasutaja on olemas
    if($stmt->fetch()){
      
      $tablet = new StdClass();
      $tablet->assets_id = $assets_id;
      $tablet->name = $name;
      $tablet->model = $model;
      $tablet->type = $type;
      $tablet->price = $price;
      $tablet->qty = $qty;
      $tablet->image = $image;
      $tablet->image2 = $image2;
      $tablet->image3 = $image3;
      $tablet->comment = $comment;
      $tablet->classe = $class;
      $tablet->tablets_id = $tablets_id;
      $tablet->cpu = $cpu;
      $tablet->os = $os;
      $tablet->ram = $ram;
      $tablet->memory = $memory;
      $tablet->videocard = $videocard;
      $tablet->display = $display;
      $tablet->ports = $ports;
      $tablet->slots = $slots;
      $tablet->dimensions = $dimensions;
      $tablet->webcam = $webcam;
      $tablet->mobilecon = $mobilecon;
      $tablet->produsoft = $produsoft;
      $tablet->secusoft = $secusoft;
      $tablet->security = $security;
      $tablet->wireless = $wireless;
      
      
      
      
      
      
      
      array_push($tablets,$tablet);
      
      
    }
  
  return $tablets;
  


  
  
  
  
  
  
  
}

function GetPrinter($id){
      $stmt =$this->connection->prepare("SELECT * FROM assets left join dell_printers on assets.id = dell_printers.id left join printers on assets.id = printers.id  WHERE assets.id=?");
    $stmt->bind_param("i", $id);
    
    $stmt->bind_result($assets_id, $name, $model, $type, $price, $qty ,$image,$image2,$image3,$comment,$class,$dell_printer_id ,
$dell_printer_printer_specs,
$dell_printer_scan_specs,
$dell_printer_copy_s,
$dell_printer_fax_specs,
$dell_printer_mobile_print,
$dell_printer_paper_hand,
$dell_printer_media,
$dell_printer_connect,
$dell_printer_os,
$dell_printer_phys_specs,
$dell_printer_network,
$dell_printer_security,
$dell_printer_op_env,
$dell_printer_power,
$dell_printer_cosum,
$dell_printer_languages,
$dell_printer_printer_manag,
$dell_printer_in_box,
$printer_ID,
$printer_quick_specs,
$printer_general,
$printer_copy,
$printer_print,
$printer_scan,
$printer_connect,
$printer_sys_req,
$printer_dimensions,
$printer_media_handling,
$printer_misc);

    $stmt->execute();
    $printers = array();
    // Kas kasutaja on olemas
    if($stmt->fetch()){
      
      $printer = new StdClass();
      $printer->assets_id = $assets_id;
      $printer->name = $name;
      $printer->model = $model;
      $printer->type = $type;
      $printer->price = $price;
      $printer->qty = $qty;
      $printer->image = $image;
      $printer->image2 = $image2;
      $printer->image3 = $image3;
      $printer->comment = $comment;
      $printer->classe = $class;
      $printer->dell_id = $dell_printer_id ;
      $printer->dell_printer_specs = $dell_printer_printer_specs;
      $printer->dell_scan_specs = $dell_printer_scan_specs;
      $printer->dell_copy_s = $dell_printer_copy_s;
      $printer->dell_fax_specs = $dell_printer_fax_specs;
      $printer->dell_mobile_print= $dell_printer_mobile_print;
      $printer->dell_paper_hand = $dell_printer_paper_hand;
      $printer->dell_media = $dell_printer_media;
      $printer->dell_connect = $dell_printer_connect;
      $printer->dell_os = $dell_printer_os;
      $printer->dell_phys_specs = $dell_printer_phys_specs;
      $printer->dell_network = $dell_printer_network;
      $printer->dell_security = $dell_printer_security;
      $printer->dell_op_env = $dell_printer_op_env;
      $printer->dell_power = $dell_printer_power;
      $printer->dell_cosum = $dell_printer_cosum;
      $printer->dell_languages = $dell_printer_languages;
      $printer->dell_printer_manag = $dell_printer_printer_manag;
      $printer->dell_in_box = $dell_printer_in_box;
      $printer->printer_ID = $printer_ID;
      $printer->printer_quick_specs = $printer_quick_specs;
      $printer->printer_general = $printer_general;
      $printer->printer_copy = $printer_copy;
      $printer->printer_print = $printer_print;
      $printer->printer_scan = $printer_scan;
      $printer->printer_connect = $printer_connect;
      $printer->printer_sys_req = $printer_sys_req;
      $printer->printer_dimensions = $printer_dimensions;
      $printer->printer_media_handling = $printer_media_handling;
      $printer->printer_misc = $printer_misc;
      
      
      
      
      
      
      
      array_push($printers,$printer);
      
      
    }
  
  return $printers;
  


  
  
  
  
  
  
  
}






function GetTypes($search)
{
  $stmt = $this->connection->prepare("SELECT distinct type FROM assets where name like ?");
  $search_param = "%".$search."%";
  $stmt->bind_param("s", $search_param);
  $stmt->bind_result($type);
  $stmt->execute();
  
   $typis = array();
  
  while($stmt->fetch()){
    
      $typi = new StdClass;
      $typi->type = $type;
      array_push($typis,$typi);
      
    
    }
  
    return $typis;
  
  
}

function GetClasses($class,$typee)
{
  $stmt = $this->connection->prepare("SELECT distinct class,model FROM assets where type = ?  and class like ?");
  $search_param = "%".$class."%";
  $stmt->bind_param("ss",$typee, $search_param);
  $stmt->bind_result($classe,$model);
  $stmt->execute();
  
   $classes = array();
  
  while($stmt->fetch()){
    
      $clas = new StdClass;
      $clas->clas = $classe;
      $clas->model = $model;
      array_push($classes,$clas);
      
    
    }
  
    return $classes;
  
  
}



function getProducts($search,$typee){
  
    
    
    $stmt = $this->connection->prepare("SELECT * FROM assets where name like ? and type = ?");
    $search_param = "%".$search."%";
    
    
    $stmt->bind_param("ss", $search_param, $typee);
    $stmt->bind_result($id, $name, $model, $type, $price, $qty ,$image,$image2,$image3,$comment,$class);
    $stmt->execute();
    
    $products = array();
    
    //käime ühe rea haaval läbi
    while($stmt->fetch()){
    
      $product = new StdClass;
      $product->id = $id;
      $product->name = $name;
      $product->model = $model;
      $product->type = $type;
      $product->price = $price;
      $product->qty = $qty;
      $product->image = $image;
      $product->image2 = $image2;
      $product->image3 = $image3;
      $product->comment = $comment;
      $product->classe = $class;
      
      array_push($products,$product);
      
    
    }
  
    return $products;
}  
  
function GetNotebooks($page_nr,$modell,$class){
  
    $page_nr = (($page_nr * 12) - 12);
      
    
    $stmt = $this->connection->prepare("select assets.id , name , model , type, price, qty , image,image2 ,comment , cpu , os , ram , memory , videocard,display from assets left join notebooks on assets.id = notebooks.id where model = ?  and type = 'notebook' and class like ? order by id LIMIT ? , 12  ");
    $search_param = "%".$class."%";
    $stmt->bind_param("ssi",$modell,$search_param,$page_nr);
    $stmt->bind_result($id, $name, $model, $type, $price, $qty ,$image,$image2,$comment,$cpu,$os,$ram,$memory,$videocard,$display);
    $stmt->execute();
    
       $products = array();
    
    //käime ühe rea haaval läbi
    while($stmt->fetch()){
    
      $product = new StdClass;
      $product->id = $id;
      $product->name = $name;
      $product->model = $model;
      $product->type = $type;
      $product->price = $price;
      $product->qty = $qty;
      $product->image = $image;
      $product->image2 = $image2;
      $product->comment = $comment;
      $product->cpu = $cpu;
      $product->os = $os;
      $product->ram = $ram;
      $product->memory = $memory;
      $product->videocard = $videocard;
      $product->display = $display;
      
      array_push($products,$product);
      
    
    }
  
    return $products;
  
}

function GetDesktops($page_nr,$modell,$class){
  
  $page_nr = (($page_nr * 12) - 12);
  
    
    $stmt = $this->connection->prepare("select assets.id , name , model , type, price, qty , image,image2,comment,cpu,os,ram,memory,videocard,soundcard,display from assets left join desktops on assets.id = desktops.id where assets.model = ?  and class like ? and assets.type = 'desktop'  order by assets.id LIMIT ? , 12 ");
    $search_param = "%".$class."%";
    $stmt->bind_param("ssi",$modell,$search_param,$page_nr);
    $stmt->bind_result($id, $name, $model, $type, $price, $qty ,$image,$image2,$comment,$cpu,$os,$ram,$memory,$videocard,$soundcard,$display);
    $stmt->execute();
    
       $products = array();
    
    //käime ühe rea haaval läbi
    while($stmt->fetch()){
    
      $product = new StdClass;
      $product->id = $id;
      $product->name = $name;
      $product->model = $model;
      $product->type = $type;
      $product->price = $price;
      $product->qty = $qty;
      $product->image = $image;
      $product->image2 = $image2;
      $product->comment = $comment;
      $product->cpu = $cpu;
      $product->os = $os;
      $product->ram = $ram;
      $product->memory = $memory;
      $product->videocard = $videocard;
      $product->soundcard = $soundcard;
      $product->display = $display;
      array_push($products,$product);
      
    
    }
  
    return $products;
  
}
function GetTablets($page_nr,$modell,$class){
  $page_nr = (($page_nr * 12) - 12);
  
    
    $stmt = $this->connection->prepare("select assets.id , name , model , type, price, qty , image,image2,comment,cpu,os,ram,hdd,videocard,display from assets left join tablets on assets.id = tablets.id where model = ?  and type = 'tablet' and class like ? order by id LIMIT ? , 12 ");
    $search_param = "%".$class."%";
    $stmt->bind_param("ssi",$modell,$search_param,$page_nr);
    $stmt->bind_result($id, $name, $model, $type, $price, $qty ,$image,$image2,$comment,$cpu,$os,$ram,$hdd,$videocard,$display);
    $stmt->execute();
    
       $products = array();
    
    //käime ühe rea haaval läbi
    while($stmt->fetch()){
    
      $product = new StdClass;
      $product->id = $id;
      $product->name = $name;
      $product->model = $model;
      $product->type = $type;
      $product->price = $price;
      $product->qty = $qty;
      $product->image = $image;
      $product->image2 = $image2;
      $product->comment = $comment;
      $product->cpu = $cpu;
      $product->os = $os;
      $product->ram = $ram;
      $product->hdd = $hdd;
      $product->videocard = $videocard;
      $product->display = $display;
      array_push($products,$product);
      
    
    }
  
    return $products;
}

function GetPrinters($page_nr,$modell,$class){
  
    $page_nr = (($page_nr * 12) - 12);
      
    
    $stmt = $this->connection->prepare("select assets.id , name , model , type, price, qty , image,image2 ,comment from assets  where model = ?  and type = 'printer' and class like ? order by id LIMIT ? , 12  ");
    $search_param = "%".$class."%";
    $stmt->bind_param("ssi",$modell,$search_param,$page_nr);
    $stmt->bind_result($id, $name, $model, $type, $price, $qty ,$image,$image2,$comment);
    $stmt->execute();
    
       $products = array();
    
    //käime ühe rea haaval läbi
    while($stmt->fetch()){
    
      $product = new StdClass;
      $product->id = $id;
      $product->name = $name;
      $product->model = $model;
      $product->type = $type;
      $product->price = $price;
      $product->qty = $qty;
      $product->image = $image;
      $product->image2 = $image2;
      $product->comment = $comment;
      
      
      array_push($products,$product);
      
    
    }
  
    return $products;
  
}





}
?>