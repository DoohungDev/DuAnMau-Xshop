<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/cart.php";
include "model/danhmuc.php";
include "model/binhluan.php";
include "model/user.php";
include "view/header.php";
include "global.php";
if (!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act']) && ($_GET['act']) != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if (isset($_POST['keyword']) && ($_POST['keyword'] != "")) {
                $keyword = $_POST['keyword'];
            } else {
                $keyword = "";
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $id_danh_muc = $_GET['iddm'];
            } else {
                $id_danh_muc = 0;
            }
            $dssp = loadall_sanpham($keyword, $id_danh_muc);
            $ten_dm = load_ten_dm($id_danh_muc);
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $onesp = loadone_sanpham($_GET['idsp']);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $id_danh_muc);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && $_POST['dangky']) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_user($email, $user, $pass);
                $thongbao = "Đã đăng kí thành công vui lòng đăng nhập để sử dụng hệ thống";
            }
            include "view/user/dangki.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $check_user = check_user($user, $pass);
                if (is_array($check_user)) {
                    $_SESSION['user'] = $check_user;
                    header('Location: index.php');
                    // $thongbao = "Đã đăng nhập thành công";
                } else {
                    $thongbao = "Thông tin đăng nhập tài khoản hoặc mật khẩu không chính xác";
                }
            }
            include "view/user/dangki.php";
            break;
        case 'edit_user':
            if (isset($_POST['edit_user']) && ($_POST['edit_user'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $id = $_POST['id'];
                update_user($email, $user, $pass, $address, $phone, $id);
                $_SESSION['user'] = check_user($user, $pass);
                header('Location: index.php?act=edit_user');
            }
            include "view/user/edit_user.php";
            break;
        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $check_email = check_email($email);
                if (is_array($check_email)) {
                    $thongbao = "Mật khẩu của bạn là:" . $check_email['pass'];
                } else {
                    $thongbao = "Email không tồn tại";
                }
            }
            include "view/user/quenmk.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $namesp = $_POST['namesp'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $pay = $price * $soluong;
                $spadd = [$id, $namesp, $img, $price, $soluong, $pay];
                array_push($_SESSION['mycart'], $spadd);
            }
            include "view/cart/viewcart.php";
            break;
        case 'deletecart':
            if(isset($_GET['idcart'])){
                array_splice($_SESSION['mycart'],$_GET['idcart'],1);
            }   
            else{
                $_SESSION['mycart']=[];
            }
            header('Location: index.php?act=viewcart');
            break;
        case 'viewcart':
            include "view/cart/viewcart.php";
            break;
        case 'bill':
            include "view/cart/bill.php";
            break;
        case 'billconfirm':
            if(isset($_POST['dongydathang'])&& ($_POST['dongydathang'])){
                if(isset($_SESSION['user'])){
                    $iduser=$_SESSION['user']['id'];
                }
                else{
                    $id=0;
                }
                $name = $_POST['user'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $phone = $_POST['phone'];
                $pttt = $_POST['pttt'];
                $ngay_dat_hang = date('h:i:sa d/m/Y');
                $tong_don_hang = tong_don_hang();
                $idbill=insert_bill($iduser,$name,$email,$address,$phone,$pttt,$ngay_dat_hang,$tong_don_hang);
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                }
                $_SESSION['mycart']=[];
            }
            $bill=loadone_bill($idbill);
            $billct=loadall_cart($idbill);
            include "view/cart/billconfirm.php";
            break;
            case 'mybill':
                $listbill=load_all_bill($_SESSION['user']['id']);
                include "view/cart/mybill.php";
                break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
