<div class="row mb">
    <div class="boxtrai mr">
        <div class="boxtitle">Đơn hàng của bạn</div>
        <div class="row boxcontent">
            <table>
                <tr>
                    <th>MÃ ĐƠN HÀNG</th>
                    <th>NGÀY ĐẶT</th>
                    <th>SỐ LƯỢNG ĐẶT HÀNG</th>
                    <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                    <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                </tr>
                <?php
                    if(is_array($listbill)){
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh=get_ttdh($bill['bill_status']);
                            $count=loadall_cart_count($bill['id']);
                            echo '<tr>
                                    <td>'.$bill['id'].'</td>
                                    <td>'.$bill['ngay_dat_hang'].'</td>
                                    <td>'.$count.'</td>
                                    <td>'.$bill['total'].'</td>
                                    <td>'.$ttdh.'</td>
                                </tr>';
                        }
                    }
                ?>
                
            </table>
        </div>

    </div>
    <div class="boxphai">
        <?php
        include "view/boxright.php";
        ?>
    </div>
</div>