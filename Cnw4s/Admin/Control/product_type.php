<?php
require_once("Model/product_type_db.php");
class Product_type_CT
{
    var $product_type_md;
    public function __construct()
    {
        $this->product_type_md = new product_type();
    }
    public function list()
    {
        $data = $this->product_type_md->list_all_method();
        require_once("View/index.php");
    }
    public function delete()
    {
        $id = $_GET['id'];
        $this->product_type_md->delete($id);
        header('Location:?act=view-type');
    }

    public function go_add()
    {
        require_once("View/index.php");
    }

    public function add()
    {
        $data = array(
            'MaLSP' => ' ',
            'TenLSP' => $_POST['TenLSP'],
            'MaDM' => 'MaDM'
        );

        $this->product_type_md->add($data);
        header('Location:?act=view-type#');
    }
    public function edit()
    {
        $data = array(
            'MaLSP' => ' ',
            'TenLSP' => $_POST['TenLSP'],
            'MaDM' => 'MaDM'
        );

        $this->product_type_md->add($data);
        header('Location:?act=view-type#');
    }
    public function go_edit()
    {
        require_once("View/index.php");
    }
}