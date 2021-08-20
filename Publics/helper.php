<?php
function uploadImage($image)
{
    $target_dir = BASE_MAIN . '/Publics/image';
    $name = $image['name'];
    $tmp = $image['tmp_name'];
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION ));
    $name = uniqid() . '_' . $name;

    $extensions = array("jpeg", "jpg", "png");

    if (in_array($ext, $extensions) === false) {
       throw new ErrorException("extension not allowed, please choose a JPEG or PNG file.");
    }

    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    move_uploaded_file($tmp,"$target_dir/$name");
    return $name;
}


function checkAuthAdmin(){
    if (!isset($_SESSION['id'])){
        header('Location: /project/login');
        exit;
    }
}

function getStorageLink($image = '')
{
    if (empty($image)) {
        return 'project/Publics/admin/images/no-image.png';
    }

    return 'Publics/image/' . $image;
}


function getIDcustomer($length = 10) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}





