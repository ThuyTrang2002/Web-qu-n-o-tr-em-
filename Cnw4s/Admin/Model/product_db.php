<?php
require_once("model.php");
class product extends Model
{
  var $table = "sanpham";
  var $method = "MaSP";
  public function promotion()
  {
    $query = "SELECT * FROM khuyenmai";
    require("result.php");
    return $data;
  }
  public function type()
  {
    $query = "SELECT * FROM loaisanpham ";
    require("result.php");
    return $data;
  }
  public function category()
  {
    $query = "SELECT * FROM danhmuc";
    require("result.php");
    return $data;
  }
}
