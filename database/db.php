<?php
require __DIR__ . '/../vendor/autoload.php';
use Automattic\WooCommerce\Client;
class DB{
    
     public function connect($ck, $cs,$site)
    {

        $woocommerce = new Client(
            $site,
            $ck,
            $cs,
            
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
            ]
        );
       
      //  echo json_encode($woocommerce->get('products'));
        return  $woocommerce ;
    }
}


    //  public function connect()
    // {

//         $woocommerce = new Client(
//             'http://localhost/wordpress',
//             'ck_24ddbdb7b32e2ebd42a94b882a9c63c148a3be92',
//             'cs_09b10d7e1f3509a918dfc63b237518685a7d76a6',
//             [
//                 'wp_api' => true,
//                 'version' => 'wc/v3',
//                 'query_string_auth' => true
//             ]
//         );
    
//         return  $woocommerce ;
//     }
// }
?>

