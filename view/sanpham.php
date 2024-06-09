<section class="max-w-7xl mx-auto">
    <div  class="grid grid-cols-4 gap-4 ">
        <div class="content-right col-span-3 my-3">
            <div class="row border ">
                <div  class="tittle bg-gray-400 px-2 py-3">
                    <div class="boxtitle">Sản Phẩm <strong><?=$ten_dm?></strong></div>
                </div>
                <div class="row grid grid-cols-3 gap-4">
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
                        echo  '
                            <div class="boxsp  m-4 border round-lg       ' . $mr . '">
                               
                                <div class="product text-center font-bold border rounded-lg shadow-xl">
                                    <div class="grid justify-items-center">
                                        <!-- img Product -->
                                        <div class="">
                                            <img src="'.$hinh.'"">
                                        </div>
                                        <!-- Name Product -->
                                        <a href="'.$linksp.'" class="px-2">'.$namesp.'</a>
                                        <!-- Price Product -->
                                        <span class="text-red-400 text-xl flex items-center">'.$price.'</span>
                                        </p></span>
                                        <a href="'.$linksp.'"
                                            class="bg-green-300 border rounded-lg px-4 py-2 my-2 text-white hover:text-red-400 hover:bg-white hover:border-red-200">Chi
                                            tiết sản phẩm
                                        </a>
                                    </div>
                                </div>
                              
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
</section>