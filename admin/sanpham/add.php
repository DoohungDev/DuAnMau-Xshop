<div class="row"></div>
            <div class="row title">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row form_content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row">
                        Danh mục <br>
                        <select name="id_danh_muc" id="">
                            <?php
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="row">
                        Tên sản phẩm <br>
                        <input type="text" name="tensp">
                    </div>
                    <div class="row">
                        Giá <br>
                        <input type="text" name="price">
                    </div>
                    <div class="row">
                        Ảnh <br>
                       <input type="file" name="hinh" id="">
                    </div>
                    <div class="row">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="row">
                        <input type="submit" name="add" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listsp"><input type="button" name="listdm" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thong_bao)&&($thong_bao!= ""))
                        echo $thong_bao;
                    ?>
                </form>
            </div>
        </div>
    </div>