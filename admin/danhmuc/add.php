        <section class="main-content max-w-7xl mx-auto">
            <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Thêm mới loại hàng</h1>
            <div class="form-add border rounded-lg px-3 py-3 shadow-lg">
                <form action="#" method="post">
                    <div class="form my-4">
                        <span>Mã lọai</span><br>
                        <input type="text" name="maloai" id="" disabled placeholder="Auto number update" class="border rounded-lg w-full px-2 py-2"><br>
                        <span>Tên loại</span><br>
                        <input type="text" name="tenloai" placeholder="Nhập tên sản phẩm" class="border rounded-lg w-full px-2 py-2">
                    </div>
                    <div class="button my-4">
                        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="submit" name="add" value="THÊM MỚI">
                        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=listdm"><input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!= ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </section>