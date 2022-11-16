<?php
    class HomeModel{
        protected $_table = "products";

        public function getList(){
            $data = [
                "Items 1",
                "Items 2",
                "Items 3"
            ];
            return $data;
        }

        public function getDetail($id){
            $data = [
                "Items 1",
                "Items 2",
                "Items 3"
            ];
            return $data[$id];
        }
    }
?>