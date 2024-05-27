<section class="main-content max-w-6xl mx-auto">
    <h1 class="text-xl uppercase bg-green-100 px-2 py-4 my-3 border rounded-lg">Danh sách loại hàng</h1>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-100  dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Lựa chọn
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mã sản phẩm
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tên sản phẩm
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Giá
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ảnh
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mô tả
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
                <?php foreach($listsanpham as $sanpham) { 
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" .$id;  
                    $xoasp = "index.php?act=xoasp&id=" .$id;  
                ?>
                <tr class="bg-white border-b dark:border-gray-700">
                    <td scope="row" class="px-6 py-4 font-medium text-black-900 ">
                        <input type="checkbox">
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 ">
                        <?=$sanpham['id']?>
                    </td>
                    <td class="px-6 text-black py-4">
                        <?=$sanpham['name']?>
                    </td>
                    <td class="px-6 text-black py-4">
                        <?=$sanpham['price']?>
                    </td>
                    <td class="px-6 text-black py-4">
                        <?=$sanpham['img']?>
                    </td>
                    <td class="px-6 text-black py-4">
                        <?=$sanpham['luotxem']?>
                    </td>
                    <td class="px-6 text-black py-4">
                        <?=$sanpham['mota']?>
                    </td>
                    <td class="px-6 py-4">
                        <button class="px-2">
                            <a href="<?=$suasp?>"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline border rounded-lg px-4 py-2  ">Sửa</a>
                        </button>
                        <button>
                            <a href="<?=$xoasp?>"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline border rounded-lg px-4 py-2  ">Xóa</a>
                        </button>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <div class="button my-4">
        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="button"
            value="Chọn tất cả">
        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="button"
            value="Bỏ chọn tất cả">
        <input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white" type="button"
            value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input class="border rounded-lg px-3 py-2 mx-1 hover:bg-gray-400 hover:text-white"
                type="button" value="Nhập thêm"></a>
    </div>
</section>