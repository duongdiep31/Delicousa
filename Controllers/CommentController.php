<?php
require_once BASE_MAIN . '/Controllers/BaseController.php';
require_once BASE_MAIN . '/Models/CommentModel.php';
class CommentController extends BaseController
{
    public function insertComment()
    {
        $name = $_POST['name'];
        $content = $_POST['content'];
        $product_id = $_POST['product_id'];
        
        CommentModel::insert(compact('name', 'content', 'product_id'));
        header('Location: /project/detailsfood&id=' . $product_id);
    }
}
