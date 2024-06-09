<section class="row mb max-w-7xl mx-auto">
    <div class="grid grid-cols-4 gap-4">
        <div class="content-right col-span-3">
            <div class="row">
            <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Quên mật khẩu</h1>
                <div class="row boxcontent form_user">
                    <form action="index.php?act=quenmk" method="post">
                        <div class="row my-3">
                            <h5>Email</h5>
                            <input type="email" name="email" style=" width: 100%;border: 1px #ccc solid;padding: 10px;border-radius: 5px  ;">
                        </div>
                        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="submit" name="guiemail" value="Gửi">
                        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="reset" name="reset" value="Nhập lại" style="border-radius: 5px  ;padding: 5px 10px;background-color: white;border: 1px solid #ccc;">
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