<?php
    require_once BASE_MAIN . '/Models/blogModel.php';
class BaseController {
    protected function render($view = '', $params = [])
    {
        
        $blog = blogModel::all();
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/main/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/main.php';
    }
    protected function renderAdmin($view = '', $params = [])
    {   checkAuthAdmin();
        if (isset($_SESSION['id'])){
            $id = $_SESSION['id'];
            $array = EmployeeModel::find($id);
        }
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/admin/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/admin.php';
    }

    protected function renderEmployee($view = '', $params = [])
    {
        extract($params);
        ob_start();
        require_once BASE_MAIN . "/Views/user/$view.php";
        $contents = ob_get_clean();
        require_once BASE_MAIN . '/Views/layout/employee.php';
    }
}