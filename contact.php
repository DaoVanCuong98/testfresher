<?php
// Code PHP xử lý validate
$error = array();
$data = array();
if (!empty($_POST['contact_action']))
{
    // Lấy dữ liệu
    $data['name'] = isset($_POST['name']) ? $_POST['name'] : '';
    $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    $data['bio'] = isset($_POST['bio']) ? $_POST['bio'] : '';
 
    // Kiểm tra định dạng dữ liệu
    require('./validate.php');
    if (empty($data['name'])){
        $error['name'] = 'Bạn chưa nhập tên';
    }
 
    if (empty($data['email'])){
        $error['email'] = 'Bạn chưa email';
    }
 
    if (empty($data['bio'])){
        $error['bio'] = 'Bạn chưa nhập nội dung';
    }
 
    // Lưu dữ liệu
    if (!$error){
        echo 'Dữ liệu có thể lưu trữ';
        // Code lưu dữ liệu tại đây
        // ...
    }
    else{
        echo 'Dữ liệu bị lỗi, không thể lưu trữ';
    }
}
?>