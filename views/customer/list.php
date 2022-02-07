<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';


$data = new CustomersController();
$customers= $data->getAllCustomers();

?>

  <div class="topnav">
  <a style="margin-left:500px"href="http://localhost:8080/MounaECOM/?page=product/list">Liste des produits</a>
  <a href="http://localhost:8080/MounaECOM/?page=order/list">Liste des commandes</a>
  <a href="#contact" class="active">Liste des clients</a>
  <a style="margin-left:330px" href="http://localhost:8080/MounaECOM/logout.php"><button type="button" class="btn btn-outline-warning">Se déconnecter</button></a>
  
</div>

<span style="margin-left: 220px;margin-top: 200px">
                <a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="http://localhost:8080/MounaECOM/?page=customer/add" add style=";margin-top: 20px;  text-align: center;font-size: 18px;'Baloo Bhaijaan', cursive;width: 120px;height: 40px">Ajouter client</a>
            </span>
<div style="padding-left:16px">
  <h2></h2>
  <p></p>
</div>
<div class="container">
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID Client</th>
      <th scope="col">Email</th>
      <th scope="col">Nom</th>
      <th scope="col">Adresse</th>
         <th scope="col">Action</th>
      
    
    </tr>
  </thead>
                                          
                                <?php
                  foreach($customers as $customer){
                  echo "<tr><td>" . $customer["id"]."</td>
                            <td>" . $customer["email"]."</td>
                            <td>" . $customer["first_name"].$customer["last_name"]."</td>
                            <td>" .  $customer["billing"]["address_1"]."</td>
                            
                            <td class='d-flex flex-row'>
                            <form method='post' class='mr-1'action='?page=customer/update'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                            <button class='btn btn-success'>Modifier Client</button>
                            </form>
                           

                           
                            <form method='post' class='mr-1' action='?page=customer/delete'>
                            <input type='hidden' name='id' value=".$customer["id"].">
                             <button class='btn btn-danger'>Supprimer Client</button>
                            </form>
                            </td>
                            
                            </tr>";
                
                  }
                  ?>
                  </tbody>
</table>

</div>