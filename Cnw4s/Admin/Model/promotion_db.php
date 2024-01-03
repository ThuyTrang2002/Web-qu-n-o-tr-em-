<?php
require_once("model.php");
class promotion extends Model
{
    var $table = "khuyenmai";
    var $method = "MaKM";
    function __construct()
    {
      $this->db = new Database();
    }
function type(){
    $query = "SELECT * FROM loaisanpham ";
    require("result.php");
    return $data;
  }
function category(){
    $query = "SELECT * FROM danhmuc";
    require("result.php");
    return $data;
  }

    public function getKhuyenMaiInfo($maKhuyenMai) {
        // Kết nối đến CSDL và thực hiện truy vấn để lấy thông tin khuyến mãi
        $db = new PDO("mysql:host=localhost;dbname=ten_database", "ten_user", "mat_khau");

        $query = "SELECT * FROM khuyenmai WHERE MaKM = :maKhuyenMai";
        $statement = $db->prepare($query);
        $statement->bindParam(':maKhuyenMai', $maKhuyenMai);
        $statement->execute();

        // Kiểm tra xem có kết quả trả về hay không
        if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            return $row;
        } else {
            return false; // Trả về false nếu không tìm thấy thông tin khuyến mãi
        }
    }

}
