
<?php


require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';

//require_once('../database/db.php');
if(isset($_POST['submit']))
{
$newCustomer= new CustomersController();
$newCustomer->addCustomer();


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

         
          <form class="user" method="post">


                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Email" name="email"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="First name" name="first_name"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Lastname" name="last_name"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Username" name="username"></div>

                                          <div class="form-group"><input class="form-control form-control-user" type="text"  placeholder="Adress" name="address_1"></div>


                                      <div class="form-group">
      <button class="btn btn-primary btn-block text-white btn-user" type="submit"  name="submit" class="btn btn-primary" style="background-color: rgb(0,0,0);font-size: 25px;">Ajouter client</button>
      </div>
                                          <hr>
                                          <hr>
                                        
                                      </form>
                                        <a href="http://localhost:8080/MounaECOM/?page=product/list" class="btn btn-primary btn-smbtn-block text-white btn-user">
   <i>Retourner vers la liste des clients</i>
   </a>
                                  </div>
                                </div>
                        </div>
                </div>

 </div>








