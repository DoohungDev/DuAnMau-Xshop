<div class="row mb">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <nav class="slideshow">
                    <div class="slideshows">
                        <div class="fade">
                            <img src="view/images/ss.jpg" alt="" width="100%" style="height: 250px;">
                        </div>
                    </div>
                    <div class="slideshows">
                        <div class=" fade">
                            <img src="view/images/banner1.jpg" alt="" width="100%" style="height: 250px;">
                        </div>
                    </div>
                    <div class="slideshows">
                        <div class=" fade">
                            <img src="view/images/banner2.jpg" alt="" width="100%" style="height: 250px;">
                        </div>

                    </div>
                    <div class="slideshows">
                        <div class=" fade">
                            <img src="view/images/banner3.jpg" alt="" width="100%" style="height: 250px;">
                        </div>

                    </div>
                    <div class="slideshows">
                        <div class=" fade">
                            <img src="view/images/banner4.jpg" alt="" width="100%" style="height: 250px;">
                        </div>

                    </div>
                    <div class="dots" style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                        <span class="dot" onclick="currentSlide(4)"></span>
                        <span class="dot" onclick="currentSlide(5)"></span>
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </nav>
            </div>
        </div>
        <div class="row mr">
            <?php
            $i = 0;
            foreach ($spnew as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                $linksp="index.php?act=sanphamct&idsp=".$id;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo  '<div class="boxsp '.$mr.'" style="margin: 5px 5px;">
                            <div class="row img">
                                <img src="'.$hinh.'"  style="width: 90%; height:250px;">
                            </div>
                            <p style="color:red;font-size:17px;"><sup>đ</sup>' . $price . '</p>
                            <a href="'.$linksp.'" style="text-decoration: none; font-size: 16px; color:black;"> '.$namesp.'</a>
                            <div>
                            <form action="index.php?act=addtocart" method="post">
                                <input type="hidden" name="id" value="'.$id.'">
                                <input type="hidden" name="namesp" value="'.$namesp.'">
                                <input type="hidden" name="img" value="'.$img.'">
                                <input type="hidden" name="price" value="'.$price.'">
                                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                            </form>
                            </div>
                            </div>';
            }
            ?> 
        </div>
    </div>
    <div class="boxphai">
        <?php include "boxright.php" ?>
    </div>
</div>
