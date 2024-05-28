<?php
    function loadAll_cate(){
        $sql = "SELECT * FROM danhmuc order by id ASC";
        $listdanhmuc =  pdo_query($sql);
        return $listdanhmuc;
    }

    function loadOne_cate($id){
        $sql = "SELECT * FROM danhmuc WHERE id=".$id;
        $dm =  pdo_query($sql);
        return $dm;
    }

    function add_cate($tenloai){
        $sql= "INSERT INTO danhmuc(name) values ('$tenloai')";
        pdo_execute($sql);
    }
    
    
    function delete_cate($id){
        $sql = "DELETE FROM danhmuc where id =".$_GET['id'];
        pdo_query($sql);
    }

    function update_cate($id,$tenloai){
        $sql = "UPDATE danhmuc SET name='".$tenloai."' where id=".$id;
        pdo_execute($sql);
    }

?>