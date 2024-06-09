<div class="account border rounded-lg my-2">
        <div class="tittle bg-gray-400 px-2 py-3 rounded-t-lg">
            <h1 class="uppercase">Tài khoản</h1>
        </div>
    <div class="boxcontent form_user">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
        ?>
            <div class="px-2 py-3">
                <div class="">
                    Xin chào :
                    <span class="text-red-400"><?=$user?></span>
                </div>
                <div class="row mb">
                    <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                    <li><a href="index.php?act=edit_user">Cập nhật thông tin tài khoản</a></li>
                    <?php
                        if($role==1){
                    ?>
                    <li><a href="admin/index.php">Đăng nhập admin</a></li>
                    <?php }?>
                    <li><a href="index.php?act=thoat">Đăng Xuất</a></li>
                </div>
            </div>
        <?php
        } else {
        ?>
            <form action="index.php?act=dangnhap" method="post" class="mx-2 my-2">
                <div class="username">
                    <span>Tên đăng nhập</span><br>
                    <input type="text" name="user" placeholder="Enter the username..."
                    class="border rounded-lg px-2 py-2 w-full my-2"><br>
                </div>
                <div class="password">
                    <span>Mật khẩu</span><br>
                    <input type="password" name="pass" placeholder="Enter the password..."
                    class="border rounded-lg px-2 py-2 w-full my-2"> <br>
                </div>
                <div class="check-box-password border rounded-lg px-2 py-1">
                    <input type="checkbox" name="" id="">
                    <span>Ghi nhớ tài khoản?</span>
                </div>
                <input type="submit" name="dangnhap" value="Đăng nhập" class="border rounded-lg px-4 py-2 my-2"> 
                <li><a href="index.php?act=quenmk">Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">Đăng kí thành viên</a></li>
            </form>
        <?php } ?>
    </div>
</div>
<div class="categories border rounded-lg my-2">
    <div class="tittle bg-gray-400 px-2 py-3 rounded-t-lg">
        <h1 class="uppercase">Danh mục</h1>
    </div>
    <div class="boxcontent2 list">
        <ul>
            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $linkdm = "index.php?act=sanpham&iddm=" . $id;
                echo '
                <div class="">
                    <div class=" border-b-2 px-3 py-3">
                        <a href="' . $linkdm . '">' . $name . '</a>
                    </div>
                </div>
                ';
            }
            ?>
        </ul>
    </div>
    <div class="search bg-gray-400 px-2 py-3 rounded-b-lg">
        <form action="index.php?act=sanpham" method="post" class="flex justify-between">
            <input type="text" placeholder="Enter the name..." name="keyword" class="w-[80%] border rounded-lg">
            <input type="submit" name="timkiem" value="Tìm kiếm" class="border rounded-lg px-2 py-2 mx-1">
        </form>
    </div>
</div>
<div class="Top-10 border rounded-lg my-2">
    <div class="tittle bg-gray-400 px-2 py-3 rounded-t-lg">
        <h1 class="uppercase">Top 10 yêu thích</h1>
    </div>
    <div class=" row boxcontent">
        <?php
        foreach ($dstop10 as $sp) {
            extract($sp);
            $img = $img_path . $img;
            $linksp = "index.php?act=sanphamct&idsp=" . $id;
            echo '        
                    <div class="">
                        <div class=" border-b-2 px-5 py-3 flex">
                            <a href="' . $linksp . '"><img src="'. $img .'"></a>
                            <a href="' . $linksp . '" class="px-2">' . $namesp . '</a>
                        </div>
                    </div>
                ';
        }
        ?>
    </div>
</div>