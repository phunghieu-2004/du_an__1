<div class="row">
            <div class="row formtitle"><h1>Danh sách khách hàng</h1></div>
            <div class="row formcontent">
               
                    <div class="row mb10 formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>Mã Tài khoản</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Vai trò</th>
                        <th colspan="2">Funcion</th>
                    </tr>
                    <?php
                        foreach($listtaikhoan as $taikhoan){
                            extract($taikhoan);
                            $suatk ="index.php?act=suatk&id=".$id;
                            $xoatk ="index.php?act=xoatk&id=".$id;
                            echo 
                            '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td> '.$user.' </td>
                                <td> '.$pass.' </td>
                                <td> '.$email.' </td>
                                <td> '.$address.' </td>
                                <td> '.$tel.' </td>
                                <td> '.$role.' </td>
                                <td><a href="'.$suatk.' "><input type="button" value="Sửa"></a></td>
                                <td><a href="'.$xoatk.'"><input type="button" value="Xóa"></a> </td>
                            </tr>' ;
                        }
                    ?>
                    
                   </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                       
                    </div>
                
            </div>
        </div>