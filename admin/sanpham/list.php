<div class="row">
    <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">danh sách sản phẩm</h1>
    <div class="row form_content">
        <div class="row">
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="keyword" placeholder="Enter the products..." class="border rounded-lg px-2 py-2 my-2">
                <select name="id_danh_muc" class="border rounded-lg px-2 py-2">
                    <option  value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
                <input class="border rounded-lg px-4 py-2" type="submit" name="listok" value="OK">
            </form>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 my-4">
                <thead class="text-xs text-center text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            STT 
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Mã sản phẩm
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tên sản phẩm
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Ảnh
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Giá
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lượt xem
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hành động
                        </th>
                    </tr>
                    
                </thead>
                <tbody>
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
                                <tr class="bg-white border-b  dark:border-gray-500">
                                    <td class="px-6 py-4 font-medium text-gray-100"><input type="checkbox"></td>
                                    <td class="px-7 py-4 text-black">' . $id . '</td>
                                    <td class="px-7 py-4 text-black">' . $namesp . '</td>
                                    <td class="px-7 py-4 text-black w-[10%]">' . $hinh . '</td>
                                    <td class="px-7 py-4 text-black">' . $price . '</td>
                                    <td class="px-7 py-4 text-black">' . $view . '</td>
                                    <td class="px-7 py-4 text-black">
                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline border rounded-lg px-4 py-2" href="' . $capnhatsp . '"><input type="button" value="Sửa"></a>
                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline border rounded-lg px-4 py-2" href="' . $deletesp . '"><input type="button" value="Xóa"></a>
                                    </td
                                </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="row my-4">
            <input class="border rounded-lg px-3 py-2  hover:bg-gray-400 hover:text-white" type="button" value=" Chọn tất cả">
            <input class="border rounded-lg px-3 py-2  hover:bg-gray-400 hover:text-white" type="button" value="Bỏ chọn tất cả">
            <input class="border rounded-lg px-3 py-2  hover:bg-gray-400 hover:text-white" type="button" value="Xóa các mục đã chọn">
            <a class="border rounded-lg px-3 py-2  hover:bg-gray-400 hover:text-white" href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>