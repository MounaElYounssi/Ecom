<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['id']))
{
$existCustomer= new CustomersController();
$customer=$existCustomer->getoneCustomer();
}
if(isset($_POST['submit']))
{
$id=$_POST['id'];
$name=$_POST['name'];

$existCustomer = new CustomersController();
$existCustomer->updateCustomer($id);

}
?>

<div class="d-sm-flex justify-content-between align-items-center mb-4">
        <span style="color: rgb(255,255,255);font-size: 20px;font-family: 'Baloo Bhaijaan', cursive;">Add product</span>
</div>
<div class="row justify-content-md-center">
                <div class="col-lg-6">
                        <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                  <div class="p-5">

                                    <form method="post">

   <div class="form-group"type='hidden' > 
          <label for="id">Id</label>
          <input type="text" name="id" class="form-control" placeholder="customer"
          value="<?php echo $customer->id;?>"
         >
      </div>
      <div class="form-group" > 
          <label for="email">Email</label>
          <input type="text" name="email" class="form-control" placeholder="customer"
          value="<?php echo $customer->email;?>"
         >
      </div>
      <div class="form-group" > 
          <label for="first_name">Prénom</label>
          <input type="text" name="first_name" class="form-control" placeholder="customer"
          value="<?php echo $customer->first_name;?>"
         >
      </div>
   
      <div class="form-group" > 
          <label for="last_name">Nom</label>
          <input type="text" name="last_name" class="form-control" placeholder="customer"
          value="<?php echo $customer->last_name;?>"
         >

         <div class="form-group" > 
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="customer"
          value="<?php echo ($customer->username);?>"
         >
      </div>
      </div>
      <div class="form-group" > 
          <label for="address_1">Adresse</label>
          <input type="text" name="address_1" class="form-control" placeholder="customer"
          value="<?php echo ($customer->billing->address_1);?>"
         >
      </div>

      

      <div class="form-group">

      <button class="btn btn-primary btn-block text-white btn-user" type="submit"  name="submit" class="btn btn-primary" style="background-color: rgb(0,0,0);font-size: 25px;">Modifier</button>   

      </div>
   </form>
<a href="http://localhost:8080/MounaECOM/?page=order/list" class="btn btn-sm btn-primary mr-2 mb-2">
   Retourner vers la liste des ordres
   </a>
</div>