<?php
    function loadAll_pro($kyw,$iddm){
        $sql = "SELECT * FROM sanpham WHERE 1";
        if($kyw != ""){
            $sql.=" and name like '%".$kyw."%'";
        }
        if($iddm > 0){
            $sql.=" and iddm = '".$iddm."'";
        }
        $sql.=" order by id desc";
        $listsanpham =  pdo_query($sql);
        return $listsanpham;
    }

    function add_pro($tensp, $giasp, $hinh, $mota,$iddm){
        $sql= "INSERT INTO sanpham(name,price,img,mota,iddm) values ('$tensp', '$giasp', '$hinh', '$mota','$iddm')";
        pdo_execute($sql);
    }
    
    
    function delete_pro($id){
        $sql = "DELETE FROM sanpham where id =".$_GET['id'];
        pdo_query($sql);
    }

    function loadOne_pro($id){
        $sql = "SELECT * FROM sanpham WHERE id= " .$id;
        $dm =  pdo_query($sql);
        return $dm;
    }
    
    function update_pro($id,$tensp){
        $sql = "UPDATE sanpham SET name='".$tensp."' where id=" .$id;
        pdo_execute($sql);

    }

?>