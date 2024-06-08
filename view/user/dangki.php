<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="boxtitle">Đăng ký thành viên</div>
            <div class="row boxcontent form_user  ">
                <form action="index.php?act=dangky" method="post">
                    <div class="">
                        <h5>Email</h5>
                        <input type="email" name="email" style=" width: 100%;border: 1px #ccc solid;padding: 10px;border-radius: 5px  ;">
                    </div>
                    <div class="">
                        <h5>User name</h5>
                        <input type="text" name="user">
                    </div>
                    <div class="row">
                        <h5>Password</h5>
                        <input type="password" name="pass" id="">
                    </div>
                    <input type="submit" name="dangky" value="ĐĂNG KÍ">
                    <input type="reset" name="reset" value="NHẬP LẠI" style="border-radius: 5px  ;padding: 5px 10px;background-color: white;border: 1px solid #ccc;">
                </form>
                <h2 style="color:red ;">
                <?php 
                    if(isset($thongbao) && ($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>
            </div>
        </div>
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php" ?>
    </div>
</div>