<div class="row mb">
    <div class="boxtrai mr">
        <div class="boxtitle">Giỏ hàng</div>
        <div class="row">
            <table>
                <tr>
                    <?php
                    view_cart(1);
                    ?>
                </tr>
            </table>
        </div>
        <div class="row mb">
            <a href="index.php?act=bill"><input type="submit" value="Đồng ý đặt hàng"></a>
            <a href="index.php?act=deletecart"><input type="button" value="Xóa giỏ hàng"></a>
        </div>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>