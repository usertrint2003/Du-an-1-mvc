<?php
    class Home{
        public function index(){
            echo "Trang Chủ";
        }

        public function detail($id="", $slug="")
        {
            echo "id sản phẩm: ". $id . "<br/>";
            echo "slug:" .$slug;
        }

        public function seacrh($keyword=""){

            echo "Từ khóa cần tìm: " .$keyword;
        }
    }
?>