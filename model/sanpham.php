<?php 
    function insert_sanpham($ten_sp,$price,$file_name,$mota,$id_danh_muc){
        $sql="insert into san_pham(namesp,price,img,mo_ta,id_danh_muc) values('$ten_sp','$price','$file_name','$mota','$id_danh_muc')";
        pdo_execute($sql);
    }
    function delete_sanpham($id){
        $sql="delete from san_pham where id=".$id;
        pdo_execute($sql);
    }
    function loadall_sanpham_top10(){
        $sql= "select * from san_pham where 1 order by view desc limit 0,10";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham_home(){
        $sql= "select * from san_pham where 1 order by id desc limit 0,9";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function loadall_sanpham($keyword,$id_danh_muc){
        $sql="select * from san_pham where 1";
        if($keyword!=""){
            $sql.=" and namesp like '%".$keyword."%'";
        }
        if($id_danh_muc>0){
            $sql.=" and id_danh_muc ='".$id_danh_muc."'";
        }
        $sql.=" order by id asc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function load_ten_dm($id_danh_muc){
        if($id_danh_muc >0){
        $sql="select * from danh_muc where id=".$id_danh_muc;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
        }
        else{
            return "";
        }
    }
    function loadone_sanpham($id){
        $sql="select * from san_pham where id=".$id;
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function load_sanpham_cungloai($id,$id_danh_muc){
        $sql="select * from san_pham where id_danh_muc=".$id_danh_muc." AND id <>".$id;
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }
    function update_sanpham($id,$id_danh_muc,$ten_sp,$price,$mota,$file_name){
        if($file_name!="") {
            $sql="update san_pham set id_danh_muc='".$id_danh_muc."', namesp='".$ten_sp."', price='".$price."', mo_ta='".$mota."', img='".$file_name."' where id=".$id;
        }
        else {
            $sql="update san_pham set id_danh_muc='".$id_danh_muc."', namesp='".$ten_sp."', price='".$price."', mo_ta='".$mota."' where id=".$id;   
        }
        pdo_execute($sql);
    }
?>