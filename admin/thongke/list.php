<div class="row">
    <div>
        <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">quản lý thống kê</h1>
    </div>
    <div class="row form_content">
        <div class="row">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Mã danh mục
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tên danh mục
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Số lượng
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Giá cao nhất
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Giá thấp nhất
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Giá trung bình
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($listhongke as $thongke) {
                        extract($thongke);
                        echo '<tr class="bg-white border-b dark:bg-gray-300 dark:border-gray-500">
                                <td class="px-7 py-4 text-black">'.$madm.'</td>
                                <td class="px-7 py-4 text-black">'.$tendm.'</td>
                                <td class="px-7 py-4 text-black">'.$countsp.'</td>
                                <td class="px-7 py-4 text-black">'.$maxprice.'</td>
                                <td class="px-7 py-4 text-black">'.$minprice.'</td>
                                <td class="px-7 py-4 text-black">'.$trungbinh.'</td>
                            </tr>';
                    }
                ?>
            </tbody>
        </table>
        </div>
        <div class="row my-4">
                    <a class="border rounded-lg px-3 py-2  hover:bg-gray-400 hover:text-white" href="index.php?act=bieudo"><input type="button" value="Xem biểu đồ"></a>
                </div>
    </div>
</div>