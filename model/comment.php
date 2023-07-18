<?php
function   insert_bl($id_tour, $noidung, $id_user, $ngaybinhluan)
{
  $sql = "INSERT INTO `binh_luan`( `id_tour`, `id_users`, `noi_dung`, `ngay_bl`) VALUES ('$id_tour','$id_user','$noidung','$ngaybinhluan')";
  echo $sql;
  pdo_execute($sql);
}
function show_binhluan()
{
  $sql = "SELECT * FROM binh_luan INNER JOIN taikhoan ON binh_luan.id_users = taikhoan.id_users";
  $list_bl = pdo_query($sql);
  return $list_bl;
}
