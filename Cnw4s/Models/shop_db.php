<?php
require_once("model.php");
class Shop extends Model
{
    var $shop_model;

    function loaisp($a, $b)
    {
        $query = "SELECT * FROM loaisanpham WHERE   MaDM = 1 LIMIT $a, $b";

        require("result.php");

        return $data;
    }
    function keywork($a)
    {
        $a = "'%" . $a . "%'";
        $query = "SELECT * FROM sanpham WHERE  TenSP LIKE $a LIMIT 0,9";

        require("result.php");

        return $data;
    }
    function dongia($a, $b)
    {
        if ($a == 0) {
            $a = "30";
        } else {
            $a = $a;
        }
        $b = $b;
        $query = "SELECT * FROM sanpham WHERE  DonGia > $a AND DonGia < $b  LIMIT 0, 9";

        require("result.php");

        return $data;
    }

    function chitiet_loai($loai, $sp)
    {
        $query = "SELECT * FROM loaisanpham WHERE  TenLSP = '$loai' and MaDM = $sp";

        require("result.php");

        return $data;
    }
    function chitiet($id, $sp)
    {
        $query = "SELECT * FROM sanpham WHERE  MaLSP = '$id' and MaDM = $sp";

        require("result.php");

        return $data;
    }
    function sanpham_noibat()
    {
        $query = "SELECT * FROM sanpham WHERE MaSP = (SELECT MaSP sp FROM chitiethoadon GROUP BY MaSP ORDER BY COUNT(MaSP) DESC LIMIT 1)";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp()
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_dm($dm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm";

        return $this->conn->query($query)->fetch_assoc();
    }
    function count_sp_ctdm($dm, $ctdm)
    {
        $query = "SELECT COUNT(MaSP) as tong FROM sanpham WHERE MaDM = $dm And MaLSP = $ctdm";

        return $this->conn->query($query)->fetch_assoc();
    }
    public function getProductData($masp)
    {
        // Thực hiện truy vấn để lấy dữ liệu sản phẩm từ cơ sở dữ liệu
        $query = "SELECT * FROM sanpham WHERE MaSP = '$masp'";
        $result = $this->conn->query($query);

        if ($result) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }
    public function getGiaTriKM($masp)
    {
        // Thực hiện truy vấn để lấy MaKM từ bảng sản phẩm
        $query = "SELECT MaKM FROM sanpham WHERE MaSP = '$masp'";
        $result = $this->conn->query($query);

        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $maKM = $row['MaKM'];

            // Thực hiện truy vấn để lấy GiaTriKM từ bảng khuyến mãi
            $queryKM = "SELECT GiaTriKM FROM khuyenmai WHERE MaKM = '$maKM'";
            $resultKM = $this->conn->query($queryKM);

            if ($resultKM && $resultKM->num_rows > 0) {
                $rowKM = $resultKM->fetch_assoc();
                return $rowKM['GiaTriKM'];
            }
        }

        return 0; // Hoặc giá trị mặc định khác nếu không có khuyến mãi
    }
}