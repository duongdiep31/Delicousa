<?php
require_once BASE_MAIN . '/Models/MenuModel.php';
require_once BASE_MAIN . '/Models/categoryModel.php';
require_once BASE_MAIN . '/Models/CommentModel.php';
class MenuController extends BaseController{



    public function list()
    {   $menu = MenuModel::all();
        $cate = categoryModel::all();
        $this->renderAdmin('listmenu',compact('menu'));
    }

    public function addmenu()
    {
        $cate = CategoryModel::all();
        $this->renderAdmin('addMenu',compact('cate'));
    }
    
    public function detailsfood(){

        $menu = MenuModel::all();
        $item = MenuModel::find($_GET['id']);
        $comments = CommentModel::getComment ('product_id', '=', $_GET['id']);
        $this->render('detailsfood',compact('menu','item','comments'));
    }
    public function insert(){
        
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $name = $_POST['name'];
        $Ingredients = $_POST['Ingredients'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $description = $_POST['description'];
        $cate_id = $_POST['cate_id'];
      
        MenuModel::insert(compact('image' ,'name','Ingredients','price','discount','description','cate_id'));
        header('Location: /project/menu');
    }
    public function delete()
    {
        MenuModel::delete($_GET['id']);
        header('Location: /project/menu');
    }
    public function formChange()
    {   
        $item = MenuModel::find($_GET['id']);
        $cate = CategoryModel::all();

        $this->renderAdmin('editmenu',compact('item','cate'));
    }
    
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        MenuModel::update($id, $params);
        header('Location: /project/menu');
    
    }


}