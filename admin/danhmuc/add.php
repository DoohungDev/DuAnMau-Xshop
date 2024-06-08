<div class="row"></div>
            <div class="row title">
                <h1>Thêm mới loại hàng hóa</h1>
            </div>
            <div class="row form_content">
                <form action="index.php?act=list" method="post">
                    <div class="row">
                        Mã loại <br>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row">
                        Tên loại <br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row">
                        <input type="submit" name="add" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" name="listdm" value="Danh sách"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao!= ""))
                        echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>