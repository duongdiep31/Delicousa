<?php
require_once BASE_MAIN . '/Controllers/BaseController.php';
require_once BASE_MAIN . '/Models/blogModel.php';
class blogController extends BaseController{
    public function listBlog()
    {
        $blog = blogModel::all();
        $this->renderAdmin('blog',compact('blog'));
    }
    public function addBlog()
    {
        $this->renderAdmin('addBlog');
    }
    public function insert(){
        
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $title = $_POST['title'];
        $content = $_POST['content'];

        blogModel::insert(compact('image' ,'title','content'));
        header('Location: /project/blogAdmin');
    }

    public function delete()
    {
        blogModel::delete($_GET['id']);
        header('Location: /project/blogAdmin');
    }
    public function formChange()
    {   
        $item = blogModel::find($_GET['id']);
        $this->renderAdmin('editBlog',compact('item'));
    }
    
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        blogModel::update($id, $params);
        header('Location: /project/blogAdmin');
    
    }
}