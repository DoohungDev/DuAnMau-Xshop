<div class="row">
    <div class="row title mb">
        <h1>DANH SÁCH SẢN PHẨM</h1>
    </div>
    <div class="row form_content">
        <div class="row">
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="keyword" placeholder="Nhập tên sản phẩm muốn tìm">
                <select name="id_danh_muc">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <input type="submit" name="listok" value="OK">
            </form>
            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Ảnh</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $capnhatsp = "index.php?act=capnhatsp&id=" . $id;
                    $deletesp = "index.php?act=deletesp&id=" . $id;
                    $hinhpath = "../upload/" . $img;
                    if (is_file($hinhpath)) {
                        $hinh = "<img src='" . $hinhpath . "' height='80'>";
                    } else {
                        $hinh = "No photo";
                    }
                    echo '
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>' . $id . '</td>
                                <td>' . $namesp . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $price . '</td>
                                <td>' . $view . '</td>
                                <td>
                                    <a href="' . $capnhatsp . '"><input type="button" value="Sửa"></a>
                                    <a href="' . $deletesp . '"><input type="button" value="Xóa"></a>
                                </td
                            </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row">
            <input type="button" value=" Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>