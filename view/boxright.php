<div class="row mb">
    <div class="boxtitle">Tài khoản</div>
    <div class="boxcontent form_user">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="" style="margin-top: -10px;">
                xin chào <br>
                <?=$user?>
            </div>
            <div class="row mb">
                <li><a href="index.php?act=mybill">Đơn hàng của tôi</a></li>
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=edit_user">Cập nhật thông tin tài khoản</a></li>
                <?php
                    if($role==1){
                ?>
                <li><a href="admin/index.php">Đăng nhập admin</a></li>
                <?php }?>
                <li><a href="index.php?act=thoat">Đăng Xuất</a></li>
            </div>
        <?php
        } else {
        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb">
                    Tên đăng nhập<br>
                    <input type="text" name="user" id=""><br>
                </div>
                <div class="row mb">
                    Mật khẩu <br>
                    <input type="password" name="pass" id=""> <br>
                </div>
                <input type="checkbox" name id>Ghi nhớ tài khoản <br>
                <input type="submit" name="dangnhap" value="Đăng nhập">
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            </form>
        <?php } ?>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">Danh mục</div>
    <div class="boxcontent2 list">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '<li><a href="' . $linkdm . '">' . $name . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="boxfooter search">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" placeholder="Nhập tên sản phẩm muốn tìm" name="keyword">
            <input type="submit" name="timkiem" value="Tìm Kiếm" style="margin-top: 15px;">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">Top 10 yêu thích</div>
    <div class=" row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $img = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '<div class="row top10">
                                <img src="' . $img . '" alt="">
                                <a href="' . $linksp . '">' . $namesp . '</a>
                            </div>';
        }
        ?>
    </div>
</div>