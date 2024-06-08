<div class="row mb">
    <div class="boxtrai mr">
        <div class="">
            <div class="boxtitle">Cảm Ơn</div>
            <div class="row boxcontent">
                <h2>Cảm ơn quý khách đã đặt hàng</h2>
            </div>
        </div>
        <?php
            if(isset($bill)&&(is_array($bill))){
                extract($bill);
            }
        ?>
        <div class="row">
            <div class="boxtitle">Thông Tin Đơn Hàng</div>
            <div class="row boxcontent">
                <li>-Mã đơn hàng: <?= $bill['id'];?></li>
                <li>-Ngày đặt hàng :<?= $bill['ngay_dat_hang'];?></li>
                <li>-Tổng đơn hàng :<?= $bill['total'];?></li>               
                <li>-Phương thức thanh toán: <?= $bill['bill_pttt'];?></li>
                
            </div>
        </div>
        <form action="index.php?act=billconfirm">
            <div class="boxtitle">Thông tin khách hàng</div>
            <div class="row">
                <table>
                    <tr>
                        <td>Người Đặt Hàng</td>
                        <td><input type="text" name="user" value="<?= $bill['bill_name'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?= $bill['bill_address'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?=$bill['bill_email'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input type="text" name="tel" value="<?=$bill['bill_tel'] ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="row mb">
                <div class="boxtitle">Chi Tiết Giỏ Hàng</div>
                <div class="row">
                    <table>
                       
                        <?php
                            bill_chi_tiet($billct);
                        ?>
                    </table>
                </div>
            </div>
        </form>
    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>