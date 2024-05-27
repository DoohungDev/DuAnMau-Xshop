<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    // controller
    if(isset($_GET['act'])){
        $act= $_GET['act'];
        switch($act){
            // Danh mục
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
                $listdanhmuc = loadAll_cate();
                include"danhmuc/list.php";
                break;

            case'xoadm' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                delete_cate($_GET['id']);
            }
                $listdanhmuc = loadAll_cate();
                include"danhmuc/list.php";
                break;

            case'suadm' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                    $dm = loadOne_cate($_GET['id']);
                }
                include"danhmuc/update.php";
                break;
            case 'updatedm' :
                if(isset($_POST['capnhat']) && ($_POST['capnhat']) ){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_cate($id,$tenloai);
                    $thongbao = "Cập  nhật  thành công";
                }
                $listdanhmuc = loadAll_cate();
                include"danhmuc/list.php";
                break;

            //Sản phẩm
            case'addsp' :
                // kiem tra xem ng dung co click btn add kh?
                if(isset($_POST['themmoi']) && ($_POST['themmoi']) ){
                    $tenloai=$_POST['tenloai'];
                    add_cate($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include"sanpham/add.php";
                break;

            case'listsp' :
                $listsanpham = loadAll_cate();
                include"sanpham/list.php";
                break;

            case'xoasp' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                delete_cate($_GET['id']);
            }
                $listsanpham = loadAll_cate();
                include"sanpham/list.php";
                break;

            case'suasp' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                    $sp = loadOne_cate($_GET['id']);
                }
                include"sanpham/update.php";
                break;
            case 'updatesp' :
                if(isset($_POST['capnhat']) && ($_POST['capnhat']) ){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_cate($id,$tenloai);
                    $thongbao = "Cập  nhật  thành công";
                }
                $listsanpham = loadAll_cate();
                include"sanpham/list.php";
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