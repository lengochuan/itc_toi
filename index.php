<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

include_once 'config.php';
include_once 'model/model.php';

include_once 'model/cart.php';
include_once 'model/categories.php';
include_once 'model/images.php';
include_once 'model/order_items.php';
include_once 'model/orders.php';
include_once 'model/products.php';
include_once 'model/reviews.php';
include_once 'model/users.php';


//Gọi template engine Smarty
// Thư viện Smarty được tải từ thư mục library/smarty/libs/Smarty.class.php
// Đảm bảo rằng thư mục này tồn tại và chứa file Smarty.class.php
// Nếu không có, bạn cần tải Smarty từ trang chính thức và đặt nó vào thư mục này.
include_once 'library/smarty/libs/Smarty.class.php';
$smarty = new \Smarty\Smarty;
$smarty->debugging = false;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

//Xác định thư mục chứa các template
$m      = $_GET['c'] ?? 'user';
$v      = $_GET['v'] ?? 'login';

//Cấu hình thư mục chứa các template
$controller = 'controller/' . $m . '.php';
include_once $controller;
$smarty->display('templates/'.$m.'/'.$v.'.tpl');