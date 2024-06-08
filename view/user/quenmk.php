<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="boxtitle">Quên Mật Khẩu</div>
            <div class="row boxcontent form_user">
                <form action="index.php?act=quenmk" method="post">
                    <div class="row ">
                        <h5>Email</h5>
                        <input type="email" name="email" style=" width: 100%;border: 1px #ccc solid;padding: 10px;border-radius: 5px  ;">
                    </div>
                    <input type="submit" name="guiemail" value="Gửi">
                    <input type="reset" name="reset" value="Nhập lại" style="border-radius: 5px  ;padding: 5px 10px;background-color: white;border: 1px solid #ccc;">
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