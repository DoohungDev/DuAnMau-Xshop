<section  class="max-w-7xl mx-auto">
    <div class="grid grid-cols-4 gap-4 ">
        <div class="content-right col-span-3 my-3">
            <div class="row">
                <?php
                extract($onesp);
                ?>
                <div class="boxtitle border px-4 py-4 text-2xl font-bold"><?=$namesp?></div>
                <div class="">
                    <?php
                    extract($onesp);
                    $img = $img_path . $img;
                    echo '
                    <div class=" flex justify-center">
                        <img class="w-[40%]" src="' . $img . '" ><br>
                    </div>
                    <div class="border">
                        <div class="tittle bg-gray-400 px-2 py-3">
                            <h1 class="uppercase">Mô tả chi tiết</h1>
                        </div> 
                        <p class="text-center px-2 py-3">'.$mo_ta.'</p>
                    </div>  
                    ';
                    ?>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#binhluan").load("view/binhluan/binhluan.php",{idpro: <?=$id?>});
                });
            </script>
            <div class="row" id="binhluan">
                <div class="boxtitle">BÌNH LUẬN</div>
            </div>
            <div class="row">
                <div class="tittle bg-gray-400 px-2 py-3">
                    <h1 class="uppercase">sản phẩm cùng loại</h1>
                </div> 
                <div class="row boxcontent border">
                    <?php
                    foreach ($sp_cung_loai as $sp_cung_loai) {
                        extract($sp_cung_loai);
                        $linksp="index.php?act=sanphamct&idsp=".$id;
                        echo '<li style="list-style:none;padding:10px"><a href="'.$linksp.'" style="text-decoration:none; color:red">'.$namesp.'</a></li>';
                    }
                    ?>
                </div>
            </div>

        </div>
        <div class="boxphai">
            <?php include "boxright.php" ?>
        </div>
    </div>
</section>