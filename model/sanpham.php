<?php
    function loadAll_pro(){
        $sql = "SELECT * FROM sanpham order by id ASC";
        $listsanpham =  pdo_query($sql);
        return $listsanpham;
    }

    function loadOne_pro($id){
        $sql = "SELECT * FROM sanpham WHERE id= " .$id;
        $dm =  pdo_query($sql);
        return $dm;
    }

    function add_pro($name, $price, $img, $mota){
        $sql= "INSERT INTO sanpham(name) values (?) (?) (?) (?) (?)";
        pdo_execute($name, $price, $img, $mota);
    }
    
    
    function delete_pro($id){
        $sql = "DELETE FROM sanpham where id =".$_GET['id'];
        pdo_query($sql);
    }

    function update_pro($id,$tenloai){
        $sql = "UPDATE sanpham SET name='".$tenloai."' where id=" .$id;
        pdo_execute($sql);

    }

?>