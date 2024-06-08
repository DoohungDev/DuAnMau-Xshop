<?php 
    function insert_danhmuc($ten_loai){
        $sql="insert into danh_muc(name) values('$ten_loai')";
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql="delete from danh_muc where id=".$id;
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="select * from danh_muc order by id asc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql="select * from danh_muc where id=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id, $ten_loai){
        $sql="update danh_muc set name='".$ten_loai."' where id=".$id;
        pdo_execute($sql);
    }
?>