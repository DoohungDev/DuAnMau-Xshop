<div class="row"></div>
            <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Thêm mới hàng hóa</h1>
            <div class="row form_content">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                    <div class="row">
                        Danh mục <br>
                        <select name="id_danh_muc" class="border rounded-lg px-1 py-2">
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
                        <input type="text" name="tensp" class="border rounded-lg w-full px-2 py-2">
                    </div>
                    <div class="row">
                        Giá <br>
                        <input type="text" name="price" class="border rounded-lg w-full px-2 py-2">
                    </div>
                    <div class="row">
                        Ảnh <br>
                    <input type="file" name="hinh" id="" class="border rounded-lg w-full px-2 py-2">
                    </div>
                    <div class="row">
                        Mô tả <br>
                        <textarea name="mota" id="" cols="30" rows="10" class="border rounded-lg w-full px-2 py-2"></textarea>
                    </div>
                    <div class="row">
                        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="submit" name="add" value="Thêm mới">
                        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="reset" value="Nhập lại">
                        <a class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" href="index.php?act=listsp"><input type="button" name="listdm" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thong_bao)&&($thong_bao!= ""))
                        echo $thong_bao;
                    ?>
                </form>
            </div>
        </div>
    </div>