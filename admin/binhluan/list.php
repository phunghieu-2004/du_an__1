<div class="row">
            <div class="row formtitle"><h1>Danh sách khách hàng</h1></div>
            <div class="row formcontent">
               
                    <div class="row mb10 formdsloai">
                   <table>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>Nội dung bình luận </th>
                        <th>IDUser</th>
                        <th>IDpro</th>
                        <th>Ngày binh luận</th>
                        <th colspan="2">Funcion</th>
                    </tr>
                    <?php
                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            $suabl ="index.php?act=suabl&id=".$id;
                            $xoabl ="index.php?act=xoabl&id=".$id;
                            echo 
                            '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>'.$id.'</td>
                                <td> '.$noidung.' </td>
                                <td> '.$iduser.' </td>
                                <td> '.$idpro.' </td>
                                <td> '.$ngaybinhluan.' </td>
                                <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a> </td>
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