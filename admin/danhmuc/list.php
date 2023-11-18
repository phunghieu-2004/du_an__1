<div class="row">
            <div class="row formtitle"><h1>Danh sách thể loại phim</h1></div>
            <div class="row formcontent">
                <form action="#" method="post">
                    <div class="row mb10 formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>Mã Phim</th>
                        <th>Thể loại phim</th>
                        <th colspan="2">Funcion</th>
                    </tr>
                    <?php
                        foreach($listtheloai as $theloai){
                            extract($theloai);
                            $suatl ="index.php?act=suatl&id=".$id;
                            $xoatl ="index.php?act=xoatl&id=".$id;
                            echo 
                            '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td> '.$genre.' </td>
                                <td><a href="'.$suatl.' "><input type="button" value="Sửa"></a></td>
                                <td><a href="'.$xoatl.'"><input type="button" value="Xóa"></a> </td>
                            </tr>' ;
                        }
                    ?>
                    
                   </table>
                    </div>
                    <div class="row mb10">
                        <input type="button" value="Chọn tất cả">
                        <input type="button" value="Bỏ chọn tất cả">
                        <input type="button" value="Xóa các mục đã chọn">
                        <a href="index.php?act=addtl"><input type="button" value="Nhập thêm"></a>
                    </div>
                </form>
            </div>
        </div>