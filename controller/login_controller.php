<?php
session_start();
function login()
{
    render('login');
}
function account_detail()
{
    render('account_detail');
}
function change_pass_ctr()
{  
    render('change_pass');
}
function edit_pass_ctr(){
    var_dump($_POST);
    extract($_POST);
    if($pass != $_SESSION['user']['pass']){
        $errors['pass'] = "Mật khẩu cũ không khớp";
    }
    if($pass == $new_pass){
        $errors['new_pass'] = "Bạn đã nhập trùng mật khẩu cũ";
    }
    if($new_pass != $renew_pass){
        $errors['renew_pass'] = "mật khẩu không khớp mật khẩu mới";
    }
    if(!$errors){
        change_pass($_SESSION['user']['user_name'], $new_pass);
        header("location: ?ctr=change_pass");
        setcookie('message', "Thay đổi mật khẩu thành công", time() + 1);
    }
    else{
        render('change_pass',['errors' => $errors]);
    }
}
function my_cart()
{
    
    $show_dh =show_dh();
    render('my_cart',['show_dh'=>$show_dh]);
}
function my_cart_del()
{
    if(isset($_GET['id_booking_detail'])){
        $id_booking_detail = $_GET['id_booking_detail'];
        
        del_dh($id_booking_detail);
    }
    header("location:?ctr=my_cart");
    setcookie('message', "Đơn hàng của bạn đã được xóa ", time() + 1);
    render('my_cart');
}

function log_user_ctr()
{
    if (isset($_POST['btn_login'])) {
        extract($_POST);
        $data =
        [
            $user_name,
            $password
        ];
        if($user_name == ''){
            $error['user_name'] = 'Bạn chưa nhập tài khoản';
        }
        if($password == ''){
            $error['password'] = 'Bạn chưa nhập mật khẩu';
        }
        $user = show_user_one_by_hoten($user_name);   
        $check_user = check_user_log($user_name,$password);
        if(is_array($check_user)){
            $_SESSION['user'] = $user;
            
            header('location: ?ctr=home');
        }else{
            if($user_name == "") {
                $error['check'] = '';
            } else {
                $error['check'] = 'Tài khoản không tồn tại';
            }
            render('login',['error' => $error,'data' => $data]);
        }
    }
}
function logout_user_ctr() {
    unset($_SESSION['user']);
    header("location: ?ctr=home");
}

function miss_password_ctr(){
    
    render('miss_password');
}