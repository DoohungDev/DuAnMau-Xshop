<div class="row">
            <div class="row title">
                <h1>DANH SÁCH TÀI KHOẢN</h1>
            </div>
            <div class="row form_content"> 
                <div class="row">
                    <table>
                        <tr>
                            <th></th>
                            <th>Id Tài Khoản</th>
                            <th>Tên đăng nhập</th>
                            <th>Mật Khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Điện thoại</th>
                            <th>Vai trò</th>
                            <th></th>
                        </tr>
                        <?php
                            foreach($list_user as $user){
                                extract($user);
                                $deletetk="index.php?act=deletetk&id=".$id;
                                echo ' 
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>'.$id.'</td>
                                <td>'.$user.'</td>
                                <td>'.$pass.'</td>
                                <td>'.$email.'</td>
                                <td>'.$address.'</td>
                                <td>'.$phone.'</td>
                                <td>'.$role.'</td>
                                <td>
                                    <a href="'.$deletetk.'"><input type="button" value="Xóa"></a>
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