<?php
require_once BASE_MAIN . '/Models/categoryModel.php';
class categoryController extends BaseController{
    public function listcate()
    {   
        $cate = categoryModel::all();
        $this -> renderAdmin('listcate',compact('cate'));
    }
    public function addcate()
    {
        $this -> renderAdmin('addcate');
    }
    public function insert(){
        
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $name = $_POST['name'];
   
        categoryModel::insert(compact('image' ,'name'));
        header('Location: /project/cate');
    }
    public function delete()
    {
        categoryModel::delete($_GET['id']);
        header('Location: /project/cate');
    }
    public function formChange()
    {   
        $item = categoryModel::find($_GET['id']);
        $this->renderAdmin('editcate',compact('item'));
    }
    
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        categoryModel::update($id, $params);
        header('Location: /project/cate');
    
    }
}