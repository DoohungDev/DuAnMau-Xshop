<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row ">
            <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Cập nhật loại hàng</h1>
            <div class="row form_content border rounded-lg px-3 py-3 shadow-lg">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row ">
                        Mã loại <br>
                        <input class="border rounded-lg w-full px-2 py-2" type="text" placeholder="Auto number upincrease" name="maloai" disabled>
                    </div>
                    <div class="row">
                        Tên loại <br>
                        <input  class="border rounded-lg w-full px-2 py-2" type="text" name="tenloai" value="<?php if(isset($name) && ($name!="")) echo $name; ?>">
                    </div>
                    <div class="row my-3">
                        <input class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" type="hidden" name="id" value="<?php if(isset($id) && ($id>0)) echo $id; ?>">
                        <input class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" type="submit" name="capnhat" value="Cập nhật">
                        <input class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" type="reset" value="Nhập lại">
                        <a class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" href="index.php?act=listdm"><input type="button" name="listdm" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!= ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>