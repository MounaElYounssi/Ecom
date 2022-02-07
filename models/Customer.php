<?php
session_start();

require __DIR__ . '/../vendor/autoload.php';
class Customer{
    static public function getAll()
    {
       $connection = new DB( );
        $data= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
        $data = json_encode($data->get('customers'));
        $data = json_decode($data,true);
        //print_r($data);
        return $data;
}
  static public function add($data)
  {
      
$connection = new DB();
$woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);



$woocommerce->post('customers', $data);
  }

  static public function getCustomer($data)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
    $id=$data['id'];

    
    $customer =$woocommerce->get('customers/'.$id);
    return $customer;

     
  }

  static public function update($data,$id)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);

    
    $woocommerce->put('customers/'.$id,$data);

  }

  static public function delete($data)
  {
    $connection = new DB();
    $woocommerce= $connection->connect($_SESSION['ck'],$_SESSION['cs'],$_SESSION['site']);
    $id=$data['id'];
    $woocommerce->delete('customers/'.$id, ['force' => true]); 
    
    
  }
}



?>