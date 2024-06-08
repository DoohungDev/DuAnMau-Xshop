<?php
    function view_cart($del){
        global $img_path;
        $tong = 0;
        $i = 0;
        if($del==1){
            $xoasp_th='<th>Thao tác</th>';
            $xoasp_td2='<td></td>';
        }
        else{
            $xoasp_th='';
            $xoasp_td2='';
        }
        echo ' <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                '.$xoasp_th.'
                </tr>';
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh = $img_path . $cart[2];
            $pay = $cart[3] * $cart[4];
            $tong += $pay;
            if($del==1){
            $xoasp_td = '<td><a href="index.php?act=deletecart&idcart=' . $i . '"><input type="button" value="Xóa"></a></td>';
            }
            else{
                $xoasp_td="";
            }
            echo '<tr>
            <td><img src="' . $hinh . '" alt="" width=80px;></td>
            <td>' . $cart[1] . '</td>
            <td>' . $cart[3] . '</td>
            <td>' . $cart[4] . '</td>
            <td>' . $pay . '</td>
            ' . $xoasp_td . '
            </tr>';
            $i += 1;
        }
        echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $tong . '</td>
            '.$xoasp_td2.'
            </tr>';

    }
    function bill_chi_tiet($listbill){
        global $img_path;
        $tong = 0;
        $i = 0;
        echo ' <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                </tr>';
        foreach ($listbill as $cart) {
            $hinh = $img_path . $cart['img'];
            $tong+=$cart['thanhtien'];
            echo '<tr>
            <td><img src="' . $hinh . '" alt="" width=80px;></td>
            <td>' . $cart['name'] . '</td>
            <td>' . $cart['price'] . '</td>
            <td>' . $cart['soluong'] . '</td>
            <td>' . $cart['thanhtien']  . '</td>
            </tr>';
            $i += 1;
        }
        echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td>' . $tong . '</td>
            </tr>';

    }
    function tong_don_hang(){
        $tong = 0;
        foreach ($_SESSION['mycart'] as $cart) {
            $pay = $cart[3] * $cart[4];
            $tong += $pay;  
        }
        return $tong;
    }
    function insert_bill($iduser,$name,$email,$address,$phone,$pttt,$ngay_dat_hang,$tong_don_hang){
        $sql="insert into bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngay_dat_hang,total) values ('$iduser','$name','$email','$address','$tel','$pttt','$ngay_dat_hang','$tong_don_hang')";
        return pdo_execute_lastInsertID($sql);
    }
    function insert_cart($id_user,$id_pro,$img,$name,$price,$soluong,$thanhtien,$idbill){
        $sql="insert into cart(id_user,id_pro,img,name,price,soluong,thanhtien,idbill) values ('$id_user','$id_pro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
        return pdo_execute($sql);
    }
    function loadone_bill($id){
        $sql="select * from bill where id=".$id;
        $bill=pdo_query_one($sql);
        return $bill;
    }
    function loadall_cart($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return $bill;
    }
    function loadall_cart_count($idbill){
        $sql="select * from cart where idbill=".$idbill;
        $bill=pdo_query($sql);
        return sizeof($bill);
    }
    function load_all_bill($kyw="",$iduser=0){
        $sql="select * from bill where 1"; 
        if($iduser>0){
            $sql.=" AND iduser=".$iduser;
        }
        if($kyw!=""){
            $sql.=" AND id like '%".$kyw."%'";
        }
        $sql.=" order by id desc";
        $listbill=pdo_query($sql);
        return $listbill;
    }
    function get_ttdh($n){
        switch($n){
            case '0':
                $tt="Đơn hàng mới";
                break;
            case '1':
                $tt="Đang xử lý";
                break;
            case '2':
                $tt="Đang giao hàng";
                break;
            case '3':
                $tt="Giao hàng thành công";
                break;
            default: 
                $tt="Đơn hàng mới";
                break;
        }
        return $tt;
    }
    function delete_bill($id){
        $sql="delete from bill where id=".$id;
        pdo_execute($sql);
    }
    function loadall_thongke(){
        $sql="select danh_muc.id as madm, danh_muc.name as tendm, count(san_pham.id) as countsp, min(san_pham.price) as minprice, max(san_pham.price) as maxprice, avg(san_pham.price) as trungbinh";
        $sql.=" from san_pham left join danh_muc on danh_muc.id=san_pham.id_danh_muc"; 
        $sql.=" group by danh_muc.id order by danh_muc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
?>
