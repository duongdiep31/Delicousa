<?php
require_once BASE_MAIN . '/Controllers/BaseController.php';
require_once BASE_MAIN . '/Models/EmployeeModel.php';


class EmployeeController extends BaseController{

    public function signin(){
        $this->renderEmployee('signin');
    }

   
    public function login()
    {   
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $result = EmployeeModel::checkLogin($email,$pass);

        if (isset($result->email)) {
            $_SESSION['id'] = $result->id;
            $_SESSION['email'] = $result->email;
            $_SESSION['position'] = $result->position;
            header('Location: /project/home');
        } else {
            header('Location: /project/signin');
        }
    }

    public function profile()
    {
        $this->renderAdmin('profileEmployee');
    }
    public function listEmployee()
    {
        $employee = EmployeeModel::all();
        $this->renderAdmin('listEmployee',compact('employee'));
    }

    public function addEmployee()
    {
        $this->renderAdmin('addEmployee');
    }    

    public function insertEmployee()
    {
        $image = $_FILES['image'];
        $image = uploadImage($image);
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $fullname = $_POST['fullname'];
        $phone = $_POST['phone'];
        $age = $_POST['age'];
        $home = $_POST['home'];
        $experience = $_POST['experience'];
        $workingtime = $_POST['workingtime'];
        $position = $_POST['position'];
        EmployeeModel::insert(compact('image' ,'email','pass','fullname','phone','age','home','experience','workingtime','position'));
        header('Location: /project/home');
    }
    public function delete()
    {
        EmployeeModel::delete($_GET['id']);
        header('Location: /project/listEmployee');
    }
    public function formChange()
    {   
        $item = EmployeeModel::find($_GET['id']);
        $this->renderAdmin('editEmployee',compact('item'));
    }
    
    public function update()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        $params['image'] = empty($_FILES['image']['size']) ? $params['image_existed'] : uploadImage($_FILES['image']);
        unset($params['image_existed']);
        EmployeeModel::update($id, $params);

        header('Location: /project/listEmployee');
    
    }






    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['position']);
        header('Location: /project/');
    }


}