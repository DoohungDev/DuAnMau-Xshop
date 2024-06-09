<section class="row mb">
    <div class="grid grid-cols-4 gap-4">
        <div  class="content-right col-span-3">
            <div class="row">
            <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Đăng ký thành viên</h1>
                <div class="row boxcontent form_user  ">
                    <form action="index.php?act=dangky" method="post">
                        <div class="">
                            <h5>Email</h5>
                            <input type="email" name="email" style=" width: 100%;border: 1px #ccc solid;padding: 10px;border-radius: 5px  ;">
                        </div>
                        <div class="">
                            <h5>User name</h5>
                            <input class="border rounded-lg w-full px-2 py-2" type="text" name="user">
                        </div>
                        <div class="row">
                            <h5>Password</h5>
                            <input class="border rounded-lg w-full px-2 py-2" type="password" name="pass" id="">
                        </div>
                        <div class="my-3">
                            <input  class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="submit" name="dangky" value="ĐĂNG KÍ">
                            <input  class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="reset" name="reset" value="NHẬP LẠI" >
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