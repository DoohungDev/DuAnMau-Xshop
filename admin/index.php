<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/binhluan.php";
include "../model/user.php";
include "../model/dashboard.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'list':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $ten_loai = $_POST['tenloai'];
                insert_danhmuc($ten_loai);
                $thong_bao = "Thêm thành công";
            }
            include 'danhmuc/add.php';
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'danhmuc/list.php';
            break;
        case 'update':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include 'danhmuc/update.php';
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ten_loai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $ten_loai);
                $thong_bao = "Cập nhật thành công";
            }
            $sql = "select * from danh_muc order by id asc";
            $listdanhmuc = pdo_query($sql);
            include 'danhmuc/list.php';
            break;
            /**controler sản phẩm */

        case 'addsp':
            if (isset($_POST['add']) && ($_POST['add'])) {
                $id_danh_muc = $_POST['id_danh_muc'];
                $ten_sp = $_POST['tensp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $file_name = $_FILES['hinh']['name'];
                $upload_dir = "../upload/";
                $upload_file = $upload_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $upload_file)) {
                    echo "The File" . htmlspecialchars(basename($_FILES["hinh"]['name'])) . "has been upload";
                } else {
                    echo "Upload file không thành công";
                }
                insert_sanpham($ten_sp, $price, $file_name, $mota, $id_danh_muc);
                $thong_bao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/add.php';
            break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $keyword = $_POST['keyword'];
                $id_danh_muc = $_POST['id_danh_muc'];
            } else {
                $keyword = '';
                $id_danh_muc = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($keyword, $id_danh_muc);
            include 'sanpham/list.php';
            break;
        case 'deletesp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/list.php';
            break;
        case 'capnhatsp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include 'sanpham/update.php';
            break;
        case 'updatesp':
            if (isset($_POST['cap_nhat']) && ($_POST['cap_nhat'])) {
                $id = $_POST['id'];
                $id_danh_muc = $_POST['id_danh_muc'];
                $ten_sp = $_POST['tensp'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $file_name = $_FILES['hinh']['name'];
                $upload_dir = "../upload/";
                $upload_file = $upload_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES['hinh']['tmp_name'], $upload_file)) {
                } else {
                }
                update_sanpham($id, $id_danh_muc, $ten_sp, $price, $mota, $file_name);
                $thong_bao = "Cập nhật thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("", 0);
            include 'sanpham/list.php';
            break;
        case 'user':
            $list_user = loadall_taikhoan();
            include "user/list.php";
            break;
        case 'deletetk':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_tk($_GET['id']);
            }
            $list_user = loadall_taikhoan();
            include "user/list.php";
            break;
        case 'cmt':
            $listbinhluan = loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan= loadall_binhluan(0);
            include "binhluan/list.php";
            break;
        case 'thongke':
            $listhongke=loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listhongke=loadall_thongke();
            include "thongke/bieudo.php";
            break;
        default:
            include 'home.php';
            break;
    }
} else {
    include 'home.php';
}
include "footer.php";
