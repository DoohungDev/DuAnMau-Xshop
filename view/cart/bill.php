<div class="row mb">
    <div class="boxtrai mr">
        <form action="index.php?act=billconfirm" method="post">
            <div class="boxtitle">Thông tin khách hàng</div>
            <div class="row">
                <table>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";
                        $email = "";
                        $tel = "";
                    }
                    ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="user" value="<?= $name ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?= $address ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="row mb">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                <div class="row">
                    <table>
                        <tr>
                            <td><input type="radio" value="1" name="pttt">Thanh toán khi nhận hàng</td>
                            <td><input type="radio" value="2" name="pttt">Chuyển khoản ngân hàng</td>
                            <td><input type="radio" value="3" name="pttt">Thanh toán online</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
                <div class="boxtitle">THÔNG TIN GIỎ HÀNG</div>
                <div class="row">
                    <table>
                        <tr>
                           
                            <?php
                            view_cart(0);
                            ?>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row mb">
            <input type="submit" value="Đồng ý đặt hàng" name="dongydathang">
        </div>
        </form>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>