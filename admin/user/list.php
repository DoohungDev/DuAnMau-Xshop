<div class="row">
            <div>
                <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">danh sách khách hàng</h1>
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
                                    Tên đăng nhập
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Mật Khẩu
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Địa chỉ
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Điện thoại
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Vai trò
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Hành động
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($list_user as $user){
                                    extract($user);
                                    $deletetk="index.php?act=deletetk&id=".$id;
                                    echo ' 
                                <tr class="bg-white border-b dark:bg-gray-300 dark:border-gray-500">
                                    <td class="px-6 py-4 font-medium text-gray-100"><input type="checkbox"></td>
                                    <td class="px-7 py-4 text-black">'.$id.'</td>
                                    <td class="px-7 py-4 text-black">'.$user.'</td>
                                    <td class="px-7 py-4 text-black">'.$pass.'</td>
                                    <td class="px-7 py-4 text-black">'.$email.'</td>
                                    <td class="px-7 py-4 text-black">'.$address.'</td>
                                    <td class="px-7 py-4 text-black">'.$phone.'</td>
                                    <td class="px-7 py-4 text-black">'.$role.'</td>
                                    <td class="px-7 py-4">
                                        <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline border rounded-lg px-4 py-2" href="'.$deletetk.'"><input type="button" value="Xóa"></a>
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
                    <!-- <a class="border rounded-lg px-3 py-2  hover:bg-gray-400 hover:text-white" href="#"><input type="button" value="Nhập thêm"></a> -->
                </div>
            </div>
</div>