<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="boxtitle">Cập nhật tài khoản</div>
            <div class="row boxcontent form_user  ">
                <?php
                    if(isset($_SESSION['user']) && (is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_user" method="post">
                    <div class="">
                        <h5>Email</h5>
                        <input type="email" value="<?=$email?>" name="email" style=" width: 100%;border: 1px #ccc solid;padding: 10px;border-radius: 5px  ;">
                    </div>
                    <div class="">
                        <h5>User name</h5>
                        <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row">
                        <h5>Password</h5>
                        <input type="password" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row">
                        <h5>Địa chỉ</h5>
                        <input type="text" name="address" id="" value="<?=$address?>">
                    </div>
                    <div class="row">
                        <h5>Điện thoại</h5>
                        <input type="text" name="tel" id="" value="<?=$phone?>">
                    </div>
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input type="submit" name="edit_user" value="Cập nhật">
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