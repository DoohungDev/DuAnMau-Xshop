<?php
    include "header.php";
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
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
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        // echo "Sorry, there was an error uploading your file.";
                    }
                    add_pro($tensp,$giasp,$hinh,$mota,$iddm);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc = loadAll_cate();
                include"sanpham/add.php";
                break;

            case'listsp' :
                if(isset($_POST['listok']) && ($_POST['listok']) ){
                    $kyw =$_POST['kyw'];
                    $iddm =$_POST['iddm'];

                }else{
                    $kyw ="";
                    $iddm =0;
                }
                $listdanhmuc = loadAll_cate();
                $listsanpham = loadAll_pro($kyw,$iddm);
                include"sanpham/list.php";
                break;

            case'xoasp' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                delete_pro($_GET['id']);
            }
                $listsanpham = loadAll_pro("", 0);
                include"sanpham/list.php";
                break;

            case'suasp' :
                if(isset($_GET['id']) && ($_GET['id'] > 0) ){
                    $sanpham = loadOne_pro($_GET['id']);
                }
                include"sanpham/update.php";
                break;
            case 'updatesp' :
                if(isset($_POST['capnhat']) && ($_POST['capnhat']) ){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_pro($id,$tenloai);
                    $thongbao = "Cập  nhật  thành công";
                }
                $listsanpham = loadAll_pro();
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