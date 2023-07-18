<?php
function all_orders()
{
  $sql = "SELECT * FROM book_tour_detail";
  $result = pdo_query($sql);
  return $result;
}
function orders_delete($id_booking_detail)
{
  $sql = "DELETE FROM book_tour_detail WHERE id_booking_detail  =?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_booking_detail]);
}

function orders_one($id_booking_detail)
{
  $sql = "SELECT * FROM book_tour_detail WHERE id_booking_detail=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute([$id_booking_detail]);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result;
}
function orders_edit($data = [])
{
  $sql = "UPDATE book_tour_detail SET status =? where id_booking_detail=?";
  $conn = pdo_get_connection();
  $stmt = $conn->prepare($sql);
  $stmt->execute($data);
}
