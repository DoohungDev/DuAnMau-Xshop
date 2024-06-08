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
            <div class="row title">
                <h1>Cập nhật loại hàng hóa</h1>
            </div>
            <div class="row form_content">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <select name="id_danh_muc">
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
                        <input type="text" name="tensp" value="<?=$namesp?>">
                    </div>
                    <div class="row">
                        Giá <br>
                        <input type="text" name="price" value="<?=$price?>">
                    </div>
                    <div class="row">
                        Ảnh <br>
                        <?=$hinh?> <br>
                       <input type="file" name="hinh" id="" >
                    </div>
                    <div class="row">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"><?=$mo_ta?></textarea>
                    </div>
                    <div class="row">
                        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
                        <input type="submit" name="cap_nhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" name="listdm" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!= ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>