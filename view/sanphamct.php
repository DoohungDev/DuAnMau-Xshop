<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <?php
            extract($onesp);
            ?>
            <div class="boxtitle"><?=$namesp?></div>
            <div class="row boxcontent" style="text-align:center;">
                <?php
                extract($onesp);
                $img = $img_path . $img;
                echo '<img src="' . $img . '" ><br>';
                echo $mo_ta;
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
            <div class="boxtitle">SẢN PHẨM CÙNG LOẠI</div>
            <div class="row boxcontent">
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