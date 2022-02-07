<?php
require_once '././models/Customer.php';

class CustomersController{
   public function getAllCustomers()
   {
       $customers= Customer::getAll();
       return $customers;
   } 


public function addCustomer()
{
    if(isset($_POST['submit']))
    {
      

     $data = [
        'email' => $_POST['email'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'username' => $_POST['username'],
    'billing' => [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'company' => '',
        'address_1' => $_POST['address_1'],
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US',
        'email' => $_POST['email'],
        'phone' => '(555) 555-5555'
    ],
    'shipping' => [
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'company' => '',
        'address_1' => $_POST['address_1'],
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US'
    ]
    ];


    }

    Customer::add($data);
    header('Location: http://localhost:8080/MounaECOM/?page=customer/list');

}
public function getoneCustomer()
{
    if(isset($_POST['id']))
    {
        $data= array(
            'id' => $_POST['id']
        );
    }
  $customer= Customer::getCustomer($data);
  return $customer;
}


public function updateCustomer($id)
{
    if(isset($_POST['submit']))
    {
     $data = [
         
        'email' => $_POST['email'],
        'first_name' =>$_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'username' => $_POST['username'],
        'billing' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'company' => '',
            'address_1' => $_POST['address_1'],
            'address_2' => '',
            'city' => 'San Francisco',
            'state' => 'CA',
            'postcode' => '94103',
            'country' => 'US',
            'email' => $_POST['email'],
            'phone' => '(555) 555-5555'
        ],
        'shipping' => [
            'first_name' =>$_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'company' => '',
            'address_1' => $_POST['address_1'],
            'address_2' => '',
            'city' => 'San Francisco',
            'state' => 'CA',
            'postcode' => '94103',
            'country' => 'US'
        ]
    ];

    }

    Customer::update($data,$id);
   header('Location: http://localhost:8080/MounaECOM/?page=customer/list');

}
public function deleteCustomer()
{
    if(isset($_POST['id']))
    {
        $data['id']= $_POST['id'];
        
    }
    Customer::delete($data);
    header('Location: http://localhost:8080/MounaECOM/?page=customer/list');

}


}
?>