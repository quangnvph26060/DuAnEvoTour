<?php
function add_user($data)
{
    $sql = "INSERT INTO taikhoan(user_name,pass,hoten,sdt,diachi,email,image,gioitinh,vaitro)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt -> execute($data);
}

function show_user()
{
    $sql = "SELECT * FROM taikhoan";
    $result = pdo_query($sql);
    return $result;
}

function show_user_one($id_users){
    $sql = "SELECT * FROM taikhoan where id_users = $id_users";
    $result = pdo_query_one($sql);
    return $result;
}
function show_user_one_by_hoten($user_name){
    $sql = "SELECT * FROM taikhoan where user_name = ?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt -> execute([$user_name]);
    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function check_user_log($user_name, $password)
{
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM taikhoan WHERE user_name = ? and pass = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$user_name, $password]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function check_exists_user($user_name)
{
    $sql = "SELECT user_name FROM taikhoan where user_name = ?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt -> execute([$user_name]);
    $result = $stmt ->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function show_customers_admin() {
    $sql = "SELECT * FROM taikhoan WHERE vaitro = 1";
    $result = pdo_query($sql);
    return $result;
}
function customer_delete($id_users) {
    $sql = "DELETE FROM taikhoan WHERE id_users=?";
    $conn =pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt ->execute([$id_users]);
}

function customer_one($id_users) {
    $sql = "SELECT * FROM taikhoan WHERE id_users=?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id_users]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function customer_edit($data) {
    $sql = "UPDATE taikhoan SET hoten=?, sdt=?, diachi=?, email=?, image=?, gioitinh=?, user_name=? WHERE id_users=?";
    $conn = pdo_get_connection();   
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function account_edit($data) {
    $sql = "UPDATE taikhoan SET user_name=?, hoten=?, sdt=?, diachi=?, email=?, image=? WHERE id_users=?";
    $conn = pdo_get_connection();   
    $stmt = $conn->prepare($sql);
    $stmt->execute($data);
}
function check_gioi_tinh($gioitinh) {
    switch ($gioitinh) {
        case 'Nam':
            $gt = "Nam";
            break;
        case 'Nữ':
            $gt = "Nữ";
            break;
        default:
            $gt = "Nữ";
            break;
    }
    return $gt;
}
function show_staffs_admin() {
    $sql = "SELECT * FROM taikhoan WHERE vaitro = 2";
    $result = pdo_query($sql);
    return $result;
}
function insert_staff($data=[]) {
    $sql = "INSERT INTO taikhoan (hoten,sdt,diachi,email,image,gioitinh,user_name,pass,vaitro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt -> execute($data);
}
function change_pass($new_pass,$user_name){
    $sql = "UPDATE taikhoan SET pass=? WHERE user_name = ?";
    $conn = pdo_get_connection();
    $stmt = $conn->prepare($sql);
    $stmt->execute([$new_pass,$user_name]);
}
// function staff_delete($id_users) {
//     $sql = "DELETE FROM taikhoan WHERE id_users=?";
//     $conn =pdo_get_connection();
//     $stmt = $conn->prepare($sql);
//     $stmt ->execute([$id_users]);
// }
// //function Lấy 1 bản ghi
// function staff_one($id_users) {
//     $sql = "SELECT * FROM taikhoan WHERE id_users=?";
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);
//     $stmt->execute([$id_users]);
//     $result = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $result;
// }
// function staff_edit($data = []) {
//     $sql = "UPDATE taikhoan SET hoten=?, sdt=?, diachi=?, email=?, image=?, gioitinh=?, user_name=? WHERE id_users=?";
//     $conn = pdo_get_connection();
//     $stmt = $conn->prepare($sql);
//     $stmt->execute($data);
// }