<?php
    function loadall_thongke(){
        $sql="select danh_muc.id as madm, danh_muc.name as tendm, count(san_pham.id) as countsp, min(san_pham.price) as minprice, max(san_pham.price) as maxprice, avg(san_pham.price) as trungbinh";
        $sql.=" from san_pham left join danh_muc on danh_muc.id=san_pham.id_danh_muc"; 
        $sql.=" group by danh_muc.id order by danh_muc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
?>
