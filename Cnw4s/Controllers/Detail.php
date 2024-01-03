<?php
require_once("Models/detail_db.php");

class DetailController
{
    var $detail_model;
    var $table = "comment";
    var $contens = "MaDM";

    public function __construct()
    {
        $this->detail_model = new Detail();
    }

    function list()
    {
        // ... (giữ nguyên phần code hiện tại)

        $id = $_GET['id'];
        $data = $this->detail_model->detail_sp($id);
        $data_cm = $this->detail_model->detail_cm($id);

        if ($data != null) {
            $data_lq = $this->detail_model->sanpham_danhmuc(0, 4, $data['MaDM']);
        }
        require_once('Views/index.php');
    }

    function comment()
    {
        // ... (giữ nguyên phần code hiện tại)
    }

    public function showProductDetails($maSP)
    {
        // Lấy dữ liệu sản phẩm từ Model
        $productData = $this->detail_model->getProductData($maSP);

        // Kiểm tra xem có dữ liệu không
        if ($productData) {
            // Lấy GiaTriKM từ Model
            $maKM = $productData['MaKM'];
            $giaTriKM = $this->detail_model->getGiaTriKM($maKM);

            // Truyền dữ liệu vào View
            // ...
        } else {
            // Xử lý trường hợp không có dữ liệu
            echo "Không tìm thấy thông tin sản phẩm.";
        }
    }
}
