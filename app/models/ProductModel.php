<?php
    class ProductModel{
        public function getProductList(){
            return [
                'sản phẩm 1',
                'sản phẩm 2',
                'sản phẩm 3'
            ];
        }

        public function getDetail($id){
            $data = [
                "Sản phẩm 1",
                "Sản phẩm 2",
                "Sản phẩm 3",
                "Sản phẩm 4"
            ];
            return $data[$id];
        }
    }
?>