<?php
    class Product extends Controller{

        public $data = [];

        public function index(){
            echo "Danh sách sản phẩm";
        }

        public function list_product(){
            $product = $this->model("ProductModel");
            $dataProduct = $product->getProductList();

            $title = "Danh Mục sản phẩm";
            $this->data["product_list"] = $dataProduct;
            $this->data["product_title"] = $title;
            // echo "<pre>";
            // print_r($dataProduct);
            // echo "<pre>";

            //Render Vỉews
            $this->render("products/list", $this->data);

        }

        public function detail($id=0){
            $product = $this->model("ProductModel");
            
            $this->data["info"] = $product->getDetail($id);

            $this->render("products/detail",$this->data);
        }
    }
?>