<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="boxtitle">Sản Phẩm <strong><?=$ten_dm?></strong></div>
            <div class="row boxcontent">
                <?php
                $i = 0;
                foreach ($dssp as $sp) {
                    extract($sp);
                    $hinh = $img_path . $img;
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    if (($i == 2) || ($i == 5) || ($i == 8)) {
                        $mr = "";
                    } else {
                        $mr = "mr";
                    }
                    echo  '<div class="boxsp ' . $mr . '" style="margin: 5px 5px;">
                                    <div class="row img">
                                        <img src="' . $hinh . '"  style="width: 90%; height:250px;">
                                    </div>
                                    <p style="color:red; font-size:16px"><sup>đ</sup>' . $price . '</p>
                                    <a href="' . $linksp . '" style="text-decoration: none; color:black; font-size:18px"> ' . $namesp . '</a>
                                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>