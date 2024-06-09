<div class="row">
            <div class="row title">
                <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">danh sách bình luận</h1>
            </div>
            <div class="row form_content"> 
                <div class="row">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-green-100 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Lựa chọn
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nội dung
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    ID Sản phẩm
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Ngày bình luận
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hành động
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($listbinhluan as $binhluan){
                                    extract($binhluan);
                                    $suabl="index.php?act=suabl&id=".$id;
                                    $xoabl="index.php?act=xoabl&id=".$id;
                                    echo ' 
                                <tr class="bg-white border-b dark:bg-gray-300 dark:border-gray-500">
                                    <td class="px-6 py-4 font-medium text-gray-100"><input type="checkbox"></td>
                                    <td class="px-7 py-4 text-black">'.$id.'</td>
                                    <td class="px-7 py-4 text-black">'.$noidung.'</td>
                                    <td class="px-7 py-4 text-black">'.$id_user.'</td>
                                    <td class="px-7 py-4 text-black">'.$id_pro.'</td>
                                    <td class="px-7 py-4 text-black">'.$ngay_binh_luan.'</td>
                                    <td class="px-7 py-4">
                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline border rounded-lg px-4 py-2" href="'.$xoabl.'"><input type="button" value="Xóa"></a>
                                    </td>
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
                    <!-- <a class="border rounded-lg px-3 py-2  hover:bg-gray-400 hover:text-white" href="index.php?act=list"><input type="button" value="Nhập thêm"></a> -->
                </div>
            </div>
</div>