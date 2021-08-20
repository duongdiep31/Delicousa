<?php
require_once BASE_MAIN . '/Models/OrderModel.php';
require_once BASE_MAIN . '/Controllers/BaseController.php';
class OrderController extends BaseController{
    public function checkout(){
        $_SESSION['total'] = $_POST['total'];
        $_SESSION['ship'] = $_POST['ship'];
        $this->render('checkout');
    }
    public function comfirm()
    {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['phone'] = $_POST['phone'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['address'] = $_POST['address'];
        $_SESSION['phuong'] = $_POST['phuong'];
        $_SESSION['huyen'] = $_POST['huyen'];
        $_SESSION['tinh'] = $_POST['tinh'];
        $_SESSION['note'] = $_POST['note'];
        $_SESSION['totalprice'] = $_POST['totalprice'];
        $_SESSION['payment'] = 'Thanh Toán Trực Tiếp';

        
        $this->render('comfirm');
    }
    public function infomation()
    {   
        $orders = OrderModel::where('id_customer', '=', $_GET['id']);
        $this->render('infomation',compact('orders'));
    }
    public function searchOrder()
    {
        $this->render('searchOrder');
    }


    public function insert(){
        $name = $_POST['name'];
        $name_pr = $_POST['name_pr'];
        $id_customer = getIDcustomer();
        $email = $_POST['email'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $totalprice = $_POST['totalprice'];
        $status = $_POST['status'];
        $note = $_POST['note'];
        $payment = $_POST['payment'];
        OrderModel::insert(compact('name','email','address','phone','totalprice','status','note','payment','name_pr', 'id_customer'));

        unset($_SESSION['total'],$_SESSION['ship'],$_SESSION['cart'], $_SESSION['name'],$_SESSION['phone'], $_SESSION['email'],$_SESSION['address'],$_SESSION['phuong'],$_SESSION['huyen'],
        $_SESSION['tinh'],$_SESSION['note'],$_SESSION['totalprice'],$_SESSION['payment']   );
        
        header('Location: /project/infomation&id='. $id_customer);
    }
    
    public function listOder()
    {   
        $oder = OrderModel::filter();
        $this->renderAdmin('listOder',compact('oder'));
    }
    public function formUpdateOrder()
    {   
        $item = OrderModel::find($_GET['id']);
        $this->renderAdmin('updateOrder',compact('item'));
    }
    public function updateOrder()
    {
        $id = empty($_POST['id']) ? 0 : $_POST['id'];
        $params = $_POST;
        OrderModel::update($id, $params);

        header('Location: /project/listOder');
        
    }
    
}