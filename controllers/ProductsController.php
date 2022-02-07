<?php
require_once '././models/Product.php';

class ProductsController{
   public function getAllProducts()
   {
       $products= Product::getAll();
       return $products;
   } 


        
public function addProduct()
{
    if(isset($_POST['submit']))
    {
      
     $data = [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'regular_price' =>  $_POST['regular_price'],
        'description' => $_POST['description'],
        'short_description' => $_POST['short_description'],
        'categories' => [
            [
                'id' => 9
            ],
            [
                'id' => 14
            ]
        ],
        'images' => [
            [
                
                'src' => 'http://localhost:8080/MounaECOM/images/'.$_FILES["fileUpload"]["name"],
            ],
        ]
    ];


    }

    Product::add($data);
    header('Location: http://localhost:8080/MounaECOM/?page=product/list');

}
public function getoneProduct()
{
    if(isset($_POST['id']))
    {
        $data= array(
            'id' => $_POST['id']
        );
    }
  $product= Product::getProduct($data);
  return $product;
}


public function updateProduct($id)
{
    if(isset($_POST['submit']))
    {
      
        
    
     $data = [
         
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'regular_price' =>  $_POST['regular_price'],
        'description' => $_POST['description'],
        'short_description' => $_POST['short_description'],
        'categories' => [
            [
                'id' => 9
            ],
            [
                'id' => 14
            ]
        ],
        'images' => [
            [
                
                'src' => 'http://localhost:8080/MounaECOM/images/'.$_POST["file"],
            ],
           
        ]
    ];
    }

   Product::update($data,$id);
   header('Location: http://localhost:8080/MounaECOM/?page=product/list');

}
public function deleteProduct()
{
    if(isset($_POST['id']))
    {
        $data['id']= $_POST['id'];
        
    }
  Product::delete($data);
  header('Location: http://localhost:8080/MounaECOM/?page=product/list');

}


}
?>