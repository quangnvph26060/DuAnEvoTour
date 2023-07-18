<?php
function  show_orders_ctr()
{
  $all_orders = all_orders();
  $count_orders = all_orders();
  render('admin/list-orders', ['all_orders' => $all_orders, 'count_orders' => $count_orders]);
}
function delete_orders_ctr()
{
  $id_booking_detail = $_GET['id_booking_detail'];
  orders_delete($id_booking_detail);
  setcookie('message', 'Xóa dữ liệu thành công', time() + 1);
  header("location: ?ctr=show_orders_admin");
  die;
}
function update_orders_ctr()
{
  //Lấy mã hh trên URL
  $id_booking = $_GET['id_booking'];

  //lấy ra bản ghi hàng hóa cần sửa
  $orders = orders_one($id_booking);
  render(
    "admin/edit-orders",
    [
      'orders' => $orders,
    ]
  );
}

function edit_orders_ctr()
{

  //Insert dữ liệu
  extract($_POST);
  $data = [
    $tt,
    $id_booking_detail
  ];
  // switch ($tt) {
  //   case '0':
  //     $tt = "Đơn hàng mới";
  //     break;
  //   case '1':
  //     $tt = "Đang xử lý";
  //     break;
  //   case '2':
  //     $tt = "Đang giao hàng";
  //     break;
  //   case '3':
  //     $tt = "Hoàn tất";
  //     break;
  //   default:
  //     $tt = "Đơn hàng mới";
  //     break;
  // }

  orders_edit($data);
  setcookie('message', 'Cập nhật dữ liệu thành công', time() + 1);
  header("location: ?ctr=show_orders_admin");
  die;
}
