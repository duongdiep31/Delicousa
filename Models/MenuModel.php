<?php
require_once BASE_MAIN . '/Models/BaseModel.php';
require_once BASE_MAIN . '/Models/categoryModel.php';
class MenuModel extends BaseModels{
    protected $table_name = 'menu';
    protected $primary_key = 'id';
    protected $value = 'cate_id';


    public  function  categoryName()
    {
        $cate = categoryModel::find($this->cate_id);
        return empty($cate) ? '' : $cate->name;
    }
}