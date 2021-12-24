<?php
namespace App\Controllers\Api;
use App\App;
use App\Models\Order;
use App\Models\Product;
use App\View;
use PDO;
use App\Services\ApiService;

class HomeController {

    private ApiService $apiService;

    public function __construct()
    {
        $this->apiService = new ApiService();
    }

public function index() {

    $products = new Product();
    $products = $products->firstTenProducts();
    $productsToJson = $this->apiService->JsonEncode($products);
    return $productsToJson;
    
   
         


}
public function lastProducts() {

    $products = new Product();
    $products = $products->lastTenProducts();
    $productsToJson = $this->apiService->JsonEncode($products);
    return $productsToJson;
    
   
         


}
public function test() {

   
    echo "testAPI";

   // var_dump($orders->getAllOrders());
         


}

public function show():string {

    return View::make('show')->render(true);

}

public function search() {

     if(isset($_POST['search_sub'])) {

         $productName = $_POST['s'];
         $orders = new Order();
         $search = $orders->getSearchOrders($productName);
        //var_dump($search === []);
         return View::make('search',
             [
                 'orders' => $search ,
                 //'x'=>$x['z']

             ]
         )->render(true);;
     }

}

}