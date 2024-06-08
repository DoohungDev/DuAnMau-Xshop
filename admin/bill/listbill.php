<div class="row">
    <div class="row title mb">
        <h1>DANH SÁCH ĐƠN HÀNG</h1>
    </div>
    <div class="row form_content">
        <div class="row">
            <form action="index.php?act=listbill" method="post">
                <input type="text" name="kyw" placeholder="Nhập mã đơn hàng">
                <input type="submit" name="search_bill" value="OK">
            </form>
            <table>
                <tr>
                    <th></th>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                    <th></th>
                </tr>
                <?php
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $update_bill="index.php?act=update_bill&id=".$id;
                        $delete_bill="index.php?act=delete_bill&id=".$id;
                        $kh=$bill["bill_name"].'
                        <br>'.$bill["bill_email"].'
                        <br>'.$bill["bill_address"].'
                        <br>'.$bill["bill_tel"];
                        $ttdh=get_ttdh($bill['bill_status']);
                        $count=loadall_cart_count($bill['id']);
                        echo '<tr>
                                <td><input type="checkbox"></td>
                                <td>'.$bill['id'].'</td>
                                <td>'.$kh.'</td>
                                <td>'.$count.'</td>
                                <td>'.$bill['total'].'</td>
                                <td>'.$ttdh.'</td>
                                <td>'.$bill['ngay_dat_hang'].'</td>
                                <td>
                                
                                <a href="'.$delete_bill.'"><input type="button" value="Xóa"></a>
                                </td>
                            </tr>';
                    }
                ?>
            </table>
        </div>
        <div class="row">
            <input type="button" value=" Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=listbill"><input type="button" value="Tất cả đơn hàng"></a>
        </div>
    </div>
</div>