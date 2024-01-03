<?php
require_once("model.php");
class Detail extends Model
{
    function detail_sp($id)
    {
        $query =  "SELECT * from SanPham where MaSP = $id ";
        $result = $this->conn->query($query);
        return $result->fetch_assoc();
    }
    function detail_cm($id)
    {
        $query =   "SELECT * from comment WHERE MaSP = $id ORDER BY MaSP DESC limit 0,8";

        require("result.php");

        return $data;
    }

    function insert_com($data)
    {
      $f = "";
      $v = "";
      foreach ($data as $key => $value) {
          $f .= $key . ",";
          $v .= "'" . $value . "',";
      }
        $f = trim($f, ",");
        $v = trim($v, ",");
        $query =   "INSERT INTO comment($f) VALUES ($v)";
        $result = $this->conn->query($query);
    }

    // Trong file Model

    public function getProductData($masp) {
        // Thực hiện truy vấn để lấy dữ liệu sản phẩm từ cơ sở dữ liệu
        // (Chú ý: Đây chỉ là ví dụ, bạn cần thay đổi nó để phản ánh cấu trúc cơ sở dữ liệu thực của bạn)
        $query = "SELECT * FROM sanpham WHERE MaSP = '$masp'";
        $result = $this->conn->query($query);

        if ($result) {
            return mysqli_fetch_assoc($result);
        } else {
            return null;
        }
    }

    public function getGiaTriKM($masp) {
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




