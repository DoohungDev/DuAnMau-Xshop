<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    // controller
    if(isset($_GET['act'])){
        $act= $_GET['act'];
        switch($act){
            case'adddm' :
                // kiem tra xem ng dung co click btn add kh?
                if(isset($_POST['themmoi']) && ($_POST['themmoi']) ){
                    $tenloai=$_POST['tenloai'];
                    add_cate($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include"danhmuc/add.php";
                break;

            case'listdm' :
                $listdanhmuc = loadAll();
                include"danhmuc/list.php";
                break;

            case'xoadm' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                delete_cate($_GET['id']);
            }
                $listdanhmuc = loadAll();
                include"danhmuc/list.php";
                break;

            case'suadm' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                    $sql = "SELECT * FROM danhmuc where id=" .$_GET['id'];
                    $dm = pdo_one_query($sql);
                }
                include"danhmuc/update.php";
                break;

            default : 
            include "home.php";
            break;
        }
    }else{
        include "home.php";
    }

    include "footer.php";

?>