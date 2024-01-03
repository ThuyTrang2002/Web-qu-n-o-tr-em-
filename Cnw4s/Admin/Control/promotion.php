<?php
require_once("Model/promotion_db.php");
class Promotion_CT
{
    var $promotion_md;
    public function __construct()
    {
        $this->promotion_md = new promotion();
    }
    public function list()
    {
        $data = $this->promotion_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->promotion_md->delete($id);
        header('Location:?act=view-prm');
    }
    public function go_add()
    {
        require 'View/index.php';
    }
    public function add()
    {
        $data = array(
            'MaKM' => ' ',
            'TenKM' => $_POST['TenKM'],
            'LoaiKM' => $_POST['LoaiKM'],
            'GiaTriKM' => $_POST['GiaTriKM'],
            'NgayBD' => $_POST['NgayBD'],
            'TrangThai'=> '1'
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->promotion_md->add($data);
        header('Location:?act=view-prm');
    }
    public function gopage()
    {
        require 'View/index.php';
    }
    public function go_edit()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : 1;
        $data = $this->promotion_md->find($id);
        require_once("View/index.php");
    }
    public function update()
    {
        $data = array(
            'MaKM' => $_POST['MaKM'],
            'TenKM' => $_POST['TenKM'],
            'LoaiKM' => $_POST['LoaiKM'],
            'GiaTriKM' => $_POST['GiaTriKM'],
            'NgayBD' => $_POST['NgayBD'],
            'TrangThai'=> '1'
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }
        $this->promotion_md->update($data);
        header('Location:?act=view-prm');
    }
    public function viewDetailBill() {
        $data = $this->getDataForDetailBill(); // Lấy dữ liệu chi tiết đơn hàng từ Model hoặc từ nơi khác

        require_once("View/detail_bill_view.php");
    }

    private function getDataForDetailBill() {
        if (isset($data)) {
            // Duyệt qua dữ liệu để thực hiện các thao tác khác nếu cần
            foreach ($data as $key => $value) {
                // Ví dụ: Lấy thông tin khuyến mãi cho từng sản phẩm
                $maKhuyenMai = $value['MaKM'];
                $khuyenMaiInfo = $this->promotion_md->getKhuyenMaiInfo($maKhuyenMai);
    
                // Gán thông tin khuyến mãi vào dữ liệu chi tiết đơn hàng
                $data[$key]['KhuyenMaiInfo'] = $khuyenMaiInfo;
            }
    
            return $data;
        } else {
            // Xử lý khi không có dữ liệu chi tiết đơn hàng
            // Ví dụ: $data = array();
            $data = array(); 
            return $data;
        }
}

}