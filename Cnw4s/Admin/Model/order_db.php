<?php
require_once("model.php");
class order extends Model
{
    var $table = "hoadon";
    var $method = "MaHD";

    function state($id)
    {
        $query = "select * from HoaDon where TrangThai = $id  ORDER BY MaHD DESC";
        require("result.php");
        return $data;
    }
    function detail_bill($id)
    {
        $query = "SELECT ct.*, s.TenSP as Ten, s.DonGia, km.GiaTriKM 
        FROM chitiethoadon as ct 
        JOIN sanpham as s ON ct.MaSP = s.MaSP 
        LEFT JOIN khuyenmai as km ON s.MaKM = km.MaKM 
        WHERE ct.MaHD = $id";
    
        require("result.php");
    
        if ($data === false) {
            // Xử lý lỗi ở đây (ví dụ: in thông báo lỗi, ghi log, ...)
            die("Lỗi truy vấn SQL: " . mysqli_error($connection));
        }
    
        return $data;
    }
    // Trong class order


}