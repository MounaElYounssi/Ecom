<?php
require_once './vendor/autoload.php';
require_once './controllers/HomeController.php';
$home = new HomeController();
$pages=['home',
'product/add','product/update','product/delete','product/list',
'order/add','order/update','order/delete','order/list',
'customer/add','customer/update','customer/delete','customer/list'

];

if(isset($_GET['page']))
{
    if(in_array($_GET['page'],$pages))
    {
        $page=$_GET['page'];
        $home->index($page);
    }
    
}
    else{
       $home->index('Login/login');
    }


//$home->index($_GET['page']);
//$home->index('home');

?>
<?/*require_once './views/includes/header.php'*/
?>