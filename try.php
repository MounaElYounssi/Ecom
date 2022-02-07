<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://127.0.0.1/wordpress/',
    'ck_08698afaaca141513e4d0531d458313caea5930b',
    'cs_6213c373400b1e0cd33d04495c11c94bfda18816',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true 
    ]
);
//echo json_encode($woocommerce->get('products'));


try {
    $results = $woocommerce->get('orders');
    $products = $woocommerce->get('products');

    $product = count($products);

    $products = json_encode($woocommerce->get('products'));
    $customers = $woocommerce->get('customers');
    $result = count($results);
    $customer = count($customers);
    $products = json_decode($products, true);
    //you can set any date which you want
               $query = ['date_min' => '2021-01-01', 'date_max' => '2021-10-30'];
  /*  $sales = $woocommerce->get('reports/sales', $query);
    $sale = $sales[0]["total_sales"];*/
    }
    catch(HttpClientException $e) {
    $e->getMessage(); // Error message.
    $e->getRequest(); // Last request data.
    $e->getResponse(); // Last response data.
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Dashboard Template for Bootstrap</title>

</head>
<div class="container">
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1">
                    <h1 class="page-header">Dashboard</h1>
                    <div class="row placeholders">
                               <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                       <?php echo $result?>
                                   </p>
                                   <hr>
                                   <span class="text-muted">Total Orders</span>
                               </div>
                               <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                       <?php echo $customer?>
                                   </p>
                                   <hr>
                                   <span class="text-muted">Customers</span>
                               </div>
                               <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                       <?php echo $product?>
                                   </p>
                                   <hr>
                                   <span class="text-muted">All Products</span>
                               </div>
                             <!--  <div class="col-xs-6 col-sm-3 placeholder">
                                   <p id="large">
                                       <?php// echo $sale?>
                                   </p>
                                   <hr>
                                   <span class="text-muted">Total Sales</span>
                               </div>-->
                     </div>
             </div>
</div>
<div class="container">
                             <h2 class="sub-header">Orders List</h2>
                               <div class='table-responsive'>
                                   <table id='myTable' class='table table-striped table-bordered'>
                                       <thead>
                                           <tr>
                                               <th>Order #</th>
                                               <th>Customer</th>
                                               <th>Address</th>
                                               <th>Contact</th>
                                               <th>Order Date</th>
                                               <th>Status</th>
                                               <th>Actions</th>
                                           </tr>
                                       </thead>
                                       <tbody>
                                           <?php
               foreach($products as $details){
               echo "<tr><td>" . $details["id"]."</td>
                        ";
               }
               ?>
                                       </tbody>
                                   </table>
                               </div>
              </div>