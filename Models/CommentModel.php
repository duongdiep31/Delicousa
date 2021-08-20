<?php
require_once BASE_MAIN . '/Models/BaseModel.php';
require_once BASE_MAIN . '/Models/MenuModel.php';

class CommentModel extends BaseModels{
    protected $table_name = 'comment';
    protected $primary_key = 'id';

 
    public static function getComment($key, $operator, $value)
    {
        $self = new static();

        $self->query = "SELECT * FROM {$self->table_name} WHERE $key $operator '$value'";


        return $self->get() ;   
    }
 
}