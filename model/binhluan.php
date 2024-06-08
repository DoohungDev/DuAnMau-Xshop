<?php 
    function insert_binhluan($noidung,$id_user,$id_pro,$ngay_binh_luan){
        $sql="insert into binhluan(noidung,id_user,id_pro,ngay_binh_luan) values('$noidung','$id_user','$id_pro','$ngay_binh_luan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($id_pro){
        $sql="select * from binhluan where 1 ";
        if($id_pro >0)
        $sql.="AND id_pro = '".$id_pro."'";
        $sql.= "order by id asc";
        $listbinhluan=pdo_query($sql);
        return $listbinhluan;
    }
    function delete_binhluan($id){
        $sql="delete from binhluan where id=".$id;
        pdo_execute($sql);
    }
?>