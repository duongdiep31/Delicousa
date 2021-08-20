<?php 
require_once BASE_MAIN . '/Controllers/HomeController.php';
require_once BASE_MAIN . '/Controllers/MenuController.php';
require_once BASE_MAIN . '/Controllers/categoryController.php';
require BASE_MAIN . '/Controllers/cartController.php';
require_once BASE_MAIN . '/Controllers/OrderController.php';
require_once BASE_MAIN . '/Controllers/EmployeeController.php';
require_once BASE_MAIN . '/Controllers/blogController.php';
require_once BASE_MAIN . '/Controllers/CommentController.php';
$page = empty($_GET['page']) ? '' : $_GET['page'];

//index
if ($page === '') {
    $controller = new HomeController();
    $controller->home();
}
if($page === 'menulist'){
    $controller = new HomeController();
    $controller->menu();
}
if($page === 'about'){
    $controller  = new HomeController();
    $controller->about();
}
if($page === 'contact'){
    $controller = new HomeController();
    $controller->contact();
}
if($page === 'blog'){
    $controller =  new HomeController();
    $controller->blog();
}
if($page === 'detailsfood'){
    $controller =  new MenuController();
    $controller->detailsfood();

}
if($page === 'menucate'){
    $controller =  new HomeController();
    $controller->menu_cate();
    
}
//CART
if ($page === 'cart') {
    $controller = new CartController();
    $controller -> Cart();
}
if ($page === 'addcart') {
    $controller = new CartController();
    $controller -> Add();
}
if ($page === 'removecart') {
    $controller = new CartController();
    $controller -> RemoveCartid();
}



//order
if ($page === 'checkout') {
    $controller = new OrderController();
    $controller -> checkout();
}
if ($page === 'comfirm') {
    $controller = new OrderController();
    $controller -> comfirm();
}
if ($page === 'insertorder') {
    $controller = new OrderController();
    $controller -> insert();
}
if ($page === 'searchOrder') {
    $controller = new OrderController();
    $controller -> searchOrder();
}

//comment
if ($page === 'insertcomment') {
    $controller = new CommentController();
    $controller -> insertComment();
}
//signin

if ($page === 'signin') {
    $controller = new EmployeeController();
    $controller->signin();
}
if ($page === 'login') {
    $controller = new EmployeeController();
    $controller -> login();
}
if ($page === 'logout') {
    $controller = new EmployeeController();
    $controller -> logout();
}
if ($page === 'addEmployee') {
    $controller = new EmployeeController();
    $controller -> addEmployee();
}
if ($page === 'insertEmployee') {
    $controller = new EmployeeController();
    $controller -> insertEmployee();
}
if ($page === 'listEmployee') {
    $controller = new EmployeeController();
    $controller -> listEmployee();
}
if ($page === 'deleteEmployee') {
    $controller = new EmployeeController();
    $controller -> delete();
}
if ($page === 'editEmployee') {
    $controller = new EmployeeController();
    $controller -> formChange();
}
if ($page === 'changeEmployee') {
    $controller = new EmployeeController();
    $controller -> update();
}
if ($page === 'profile') {
    $controller = new EmployeeController();
    $controller -> profile();
}

//blog
if ($page === 'blogAdmin') {
    $controller = new  blogController();
    $controller-> listBlog();
}
if ($page === 'addblog') {
    $controller = new  blogController();
    $controller-> addBlog();
}
if ($page === 'insertblog') {
    $controller = new  blogController();
    $controller-> insert();
}
if ($page === 'deleteblog') {
    $controller = new  blogController();
    $controller-> delete();
}
if ($page === 'editBlog') {
    $controller = new  blogController();
    $controller-> formChange();
}
if ($page === 'updateblog') {
    $controller = new  blogController();
    $controller-> update();
}



//admin
if($page == 'home'){
    $controller = new HomeController();
    $controller->homeadmin();
}
if($page == 'menu'){
    $controller = new MenuController();
    $controller->list();
}
if($page == 'addmenu'){
    $controller = new MenuController();
    $controller->addmenu();
}
if($page == 'insertmenu'){
    $controller = new MenuController();
    $controller->insert();
}
if($page == 'deletemenu'){
    $controller = new MenuController();
    $controller->delete();
}
if($page == 'editmenu'){
    $controller = new MenuController();
    $controller->formChange();
}
if($page == 'change'){
    $controller = new MenuController();
    $controller->update();
}
if($page == 'listOder'){
    $controller = new OrderController();
    $controller->listOder();
}
if($page == 'updateOrder'){
    $controller = new OrderController();
    $controller->formUpdateOrder();
}
if($page == 'changeOrder'){
    $controller = new OrderController();
    $controller->updateOrder();
}
if($page == 'infomation'){
    $controller = new OrderController();
    $controller->infomation();
}

//category
if ($page === 'cate') {
    $controller = new categoryController();
    $controller->listcate();
}
if ($page === 'addcate') {
    $controller = new categoryController();
    $controller->addcate();
}
if ($page === 'insertcate') {
    $controller = new categoryController();
    $controller->insert();
}
if ($page === 'delete') {
    $controller = new categoryController();
    $controller->delete();
}
if ($page === 'editcate') {
    $controller = new categoryController();
    $controller->formChange();
}
if ($page === 'changecate') {
    $controller = new categoryController();
    $controller->update();
}
