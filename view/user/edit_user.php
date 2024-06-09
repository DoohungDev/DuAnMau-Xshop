<section class="row mb max-w-7xl mx-auto">
    <div class="grid grid-cols-4 gap-4">
        <div class="content-right col-span-3">
            <div class="row">
            <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Cập nhật tài khoản</h1>
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
                            <input class="border rounded-lg w-full px-2 py-2" type="text" name="user" value="<?=$user?>">
                        </div>
                        <div class="row">
                            <h5>Password</h5>
                            <input class="border rounded-lg w-full px-2 py-2" type="password" name="pass" value="<?=$pass?>">
                        </div>
                        <div class="row">
                            <h5>Địa chỉ</h5>
                            <input class="border rounded-lg w-full px-2 py-2" type="text" name="address" id="" value="<?=$address?>">
                        </div>
                        <div class="row">
                            <h5>Điện thoại</h5>
                            <input class="border rounded-lg w-full px-2 py-2" type="text" name="phone" id="" value="<?=$phone?>">
                        </div>
                        <div class="my-4">
                            <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="hidden" name="id" value="<?=$id?>">
                            <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="submit" name="edit_user" value="Cập nhật">
                            <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="reset" name="reset" value="NHẬP LẠI" >
                        </div>
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
</section>