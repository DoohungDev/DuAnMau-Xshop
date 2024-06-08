<div class="row">
    <div class="row title mb">
        <h1>Thống kê sản phẩm theo loại </h1>
    </div>
    <div class="row form_content">
        <div class="row">
           <table>
            <tr>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Số lượng</th>
                <th>Giá cao nhất</th>
                <th>Giá thấp nhất</th>
                <th>Giá trung bình</th>
            </tr>
            <?php
                foreach ($listhongke as $thongke) {
                    extract($thongke);
                    echo '<tr>
                            <td>'.$madm.'</td>
                            <td>'.$tendm.'</td>
                            <td>'.$countsp.'</td>
                            <td>'.$maxprice.'</td>
                            <td>'.$minprice.'</td>
                            <td>'.$trungbinh.'</td>
                        </tr>';
                }
            ?>
           </table>
        </div>
        <div class="row">
                    <a href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
    </div>
</div>