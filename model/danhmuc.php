<?php
    function loadAll(){
        $sql = "SELECT * FROM danhmuc order by id ASC";
        $listdanhmuc =  pdo_query($sql);
        return $listdanhmuc;
    }


    function add_cate($tenloai){
        $sql= "INSERT INTO danhmuc(name) values ('$tenloai')";
        pdo_execute($sql);
    }
    
    
    function delete_cate($id){
        $sql = "DELETE FROM danhmuc where id =".$_GET['id'];
        pdo_query($sql);
    }
?>