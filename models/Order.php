<?php
  session_start();
require __DIR__ . '/../vendor/autoload.php';
class Order{
    static public function getAll()
    {
       $connection = new DB();
        $data= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
        $data = json_encode($data->get('orders'));
        $data = json_decode($data,true);
        //print_r($data);
        return $data;
}
  static public function add($data)
  {
      
$connection = new DB();
$woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);



$woocommerce->post('orders', $data);
  }

  static public function getOrder($data)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
    $id=$data['id'];

    
    $order =$woocommerce->get('orders/'.$id);
    return $order;

     
  }

  static public function update($data,$id)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);

    
    $woocommerce->put('porders/'.$id,$data);

  }

  static public function delete($data)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
    $id=$data['id'];
    $woocommerce->delete('orders/'.$id, ['force' => true]); 
    
    
  }
}



?>