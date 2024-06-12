<?php
    if(is_array($sp)){
        extract($sp);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";
    }
    else{
        $hinh="No photo";
    }
?>
<div class="row"></div>
            <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Cập nhật loại hàng</h1>
            <div class="row form_content">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <select name="id_danh_muc" class="border rounded-lg px-1 py-2 my-2">
                        <option value="0" selected>Tất cả</option>
                        <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>
                </select>
                    <div class="row">
                        Tên sản phẩm <br>
                        <input type="text" class="border rounded-lg w-full px-2 py-2" name="tensp" value="<?=$namesp?>">
                    </div>
                    <div class="row">
                        Giá <br>
                        <input type="text" class="border rounded-lg w-full px-2 py-2" name="price" value="<?=$price?>">
                    </div>
                    <div class="row w-[20%]">
                        Ảnh <br>
                        <?=$hinh?> <br>
                    <input  type="file" class="border rounded-lg px-2 py-2 " name="hinh" id="" >
                    </div>
                    <div class="row">
                        Mô tả <br>
                        <textarea class="border rounded-lg w-full px-1 py-1" name="mota" id="" cols="20" rows="3"><?=$mo_ta?></textarea>
                    </div>
                    <div class="row">
                        <input class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" type="hidden" name="id" value="<?=$_GET['id'];?>">
                        <input class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" type="submit" name="cap_nhat" value="Cập nhật">
                        <input class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" type="reset" value="Nhập lại">
                        <a class="border rounded-lg px-3 py-2 hover:bg-gray-400 hover:text-white" href="index.php?act=listsp"><input type="button" name="listdm" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!= ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>