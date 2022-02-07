<?php
  session_start();
require __DIR__ . '/../vendor/autoload.php';

class Product{
   
        
    static public function getAll()
    {
        
       $connection = new DB();
        $data= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
        $data = json_encode($data->get('products'));
        $data = json_decode($data,true);
        //print_r($data);
        return $data;
}
static public function add($data)
{  
    
$connection = new DB();
$woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);



$woocommerce->post('products', $data);
}

  static public function getProduct($data)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
    $id=$data['id'];

    
    $product =$woocommerce->get('products/'.$id);
    return $product;

     
  }

  static public function update($data,$id)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);

    
    $woocommerce->put('products/'.$id,$data);

  }

  static public function delete($data)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
    $id=$data['id'];
    $woocommerce->delete('products/'.$id, ['force' => true]); 
    
    
  }
}



?>