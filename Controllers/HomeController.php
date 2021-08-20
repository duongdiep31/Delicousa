<?php

require_once BASE_MAIN . '/Controllers/BaseController.php';
require_once BASE_MAIN . '/Controllers/categoryController.php';
require_once BASE_MAIN . '/Controllers/HomeController.php';
require_once BASE_MAIN . '/Controllers/MenuController.php';
require_once BASE_MAIN . '/Controllers/blogController.php';

class HomeController extends BaseController{
    //index
    public function home()
    {
        $menu = MenuModel::all();
        $cate = categoryModel::all();
        $this->render('index',compact('menu','cate'));
    }
    public function menu(){
        $menu =  MenuModel::all();
        $cate = categoryModel::all();

        $this->render('menu',compact('menu','cate'));
    }
    public function about(){
        $this->render('about');
    }
    public function contact(){
        $this->render('contact');
    }
    public function blog(){
        $blog = blogModel::all();
        $this->render('blog',compact('blog'));
    }

    public function menu_cate()
    {
        $cate = categoryModel::all();
        $product_cate = MenuModel::where1($_GET['id']);

        
        $this->render('menu_cate',compact('product_cate','cate'));
    }
    
    
 





    //admin
    public function homeadmin()
    {
        
        $this->renderAdmin('home');
        
    }

    
}