<?php
require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../../database/db.php';
require __DIR__ . '/../../models/Customer.php';
require __DIR__ . '/../../controllers/CustomersController.php';
require __DIR__ .'/../../views/includes/header.php';

if(isset($_POST['id']))
{
$existCustomer = new CustomersController();
$existCustomer->deleteCustomer();
}

?>