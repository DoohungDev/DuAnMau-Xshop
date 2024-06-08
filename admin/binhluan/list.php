<div class="row">
            <div class="row title">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row form_content"> 
                <div class="row">
                    <table>
                        <tr>
                            <th></th>
                            <th>Id </th>
                            <th>Nội dung</th>
                            <th>Id user</th>
                            <th>ID pro</th>
                            <th>Ngày bình luận</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($listbinhluan as $binhluan){
                                extract($binhluan);
                                $suabl="index.php?act=suabl&id=".$id;
                                $xoabl="index.php?act=xoabl&id=".$id;
                                echo ' 
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id.'</td>
                                <td>'.$noidung.'</td>
                                <td>'.$id_user.'</td>
                                <td>'.$id_pro.'</td>
                                <td>'.$ngay_binh_luan.'</td>
                                <td>
                                    <a href="'.$xoabl.'"><input type="button" value="Xóa"></a>
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
                    <a href="index.php?act=list"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
</div>