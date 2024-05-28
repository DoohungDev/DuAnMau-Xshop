
<!-- main -->
<section class="main-content max-w-6xl mx-auto">
    <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Cập nhật sản phẩm</h1>
    <div class="form-add">
        <form action="index.php?act=updatesp" method="post">
        <?php
            foreach($sp as $sp){
        ?>
            <div class="form my-4">
                <!-- <span>Mã sản phẩm</span><br>
                <input type="text" name="masp" id="" placeholder="Auto number update"
                    class="border rounded-lg w-full px-2 py-2" disabled><br> -->
                <span>Tên sản phẩm</span><br>
                <input type="text" name="tensp" value="<?=$sp['name']?>" placeholder="Nhập tên sản phẩm"
                    class="border rounded-lg w-full px-2 py-2"><br>
                <span>Giá sản phẩm</span><br>
                <input type="text" name="giasp" value="<?=$sp['price']?>" placeholder="Nhập tên sản phẩm"
                    class="border rounded-lg w-full px-2 py-2"><br>
                <span>Ảnh sản phẩm</span><br>
                <input type="file" name="hinh" placeholder="Nhập tên sản phẩm"
                    class="border rounded-lg w-full px-2 py-2" enctype="multipart/form-data"><br>
                <span>Mô tả sản phẩm</span><br>
                <textarea name="mota" id="" value="<?=$sp['mota']?>" placeholder="Nhập tên sản phẩm"
                    class="border rounded-lg w-full px-2 py-2"></textarea>
                <!-- <span>Tên sản phẩm</span><br>
                <input type="text" name="tensp" placeholder="Nhập tên sản phẩm" class="border rounded-lg w-full px-2 py-2"><br> -->
            </div>
            <div class="button my-4">
                <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="submit"
                    value="CẬP NHẬT MỚI" name="themmoi">
                <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="reset"
                    value="NHẬP LẠI">
                <a href="index.php?act=listsp"><input
                        class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="button"
                        value="DANH SÁCH"></a>
            </div>
            <?php   
                if(isset($thongbao) && ($thongbao != "")){
                    echo $thongbao;
                }
            ?>
            <?php }?>
        </form>
    </div>
</section>