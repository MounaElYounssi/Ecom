<?php
require_once '././models/Order.php';

class OrdersController{
   public function getAllOrders()
   {
       $orders= Order::getAll();
       return $orders;
   } 


public function addOrder()
{
    if(isset($_POST['submit']))
    {
      

     $data = [
      
            'payment_method' => 'bacs',
            'payment_method_title' => 'Direct Bank Transfer',
            'set_paid' => true,
            'billing' => [
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'address_1' => $_POST['address_1'],
                'address_2' => '',
                'city' => 'San Francisco',
                'state' => 'CA',
                'postcode' => '94103',
                'country' => 'US',
                'email' => $_POST['email'],
                'phone' => $_POST['phone']
            ],
            'shipping' => [
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
                'address_1' => $_POST['address_1'],
                'address_2' => '',
                'city' => 'San Francisco',
                'state' => 'CA',
                'postcode' => '94103',
                'country' => 'US'
            ],
            'line_items' => [
                [
                    'product_id' => $_POST['product_id'],
                    'quantity' => $_POST['quantity']
                ],
                [
                    'product_id' => 22,
                    'variation_id' => 23,
                    'quantity' => 1
                ]
            ],
            'shipping_lines' => [
                [
                    'method_id' => 'flat_rate',
                    'method_title' => 'Flat Rate',
                    'total' => '10.00'
                ]
            ]
        ];
    }    
    

    Order::add($data);
    header('Location: http://localhost:8080/MounaECOM/?page=order/list');

}
public function getoneOrder()
{
    if(isset($_POST['id']))
    {
        $data= array(
            'id' => $_POST['id']
        );
    }
  $order= Order::getOrder($data);
  return $order;
}


public function updateOrder($id)
{
    if(isset($_POST['submit']))
    {
      
        
    
     $data = [
         
        'payment_method' => 'bacs',
        'payment_method_title' => 'Direct Bank Transfer',
        'set_paid' => true,
        'billing' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'address_1' => $_POST['address_1'],
            'address_2' => '',
            'city' => 'San Francisco',
            'state' => 'CA',
            'postcode' => '94103',
            'country' => 'US',
            'email' => $_POST['email'],
            'phone' => $_POST['phone']
        ],
        'shipping' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'address_1' => $_POST['address_1'],
            'address_2' => '',
            'city' => 'San Francisco',
            'state' => 'CA',
            'postcode' => '94103',
            'country' => 'US'
        ],
        'line_items' => [
            [
                'product_id' => $_POST['product_id'],
                'quantity' => $_POST['quantity']
            ],
            [
                'product_id' => 22,
                'variation_id' => 23,
                'quantity' => 1
            ]
        ],
        'shipping_lines' => [
            [
                'method_id' => 'flat_rate',
                'method_title' => 'Flat Rate',
                'total' => '10.00'
            ]
        ]
    ];
    }

    Order::update($data,$id);
    header('Location: http://localhost:8080/MounaECOM/?page=order/list');

}
public function deleteOrder()
{
    if(isset($_POST['id']))
    {
        $data['id']= $_POST['id'];
        
    }
    Order::delete($data);
    header('Location: http://localhost:8080/MounaECOM/?page=order/list');

}


}
?>