<div class="row">
    <div class="row formtitle mb">
        <h1>Danh sách loại hàng hóa</h1>
    </div>
    <form action="index.php?act=listphim" method="post">
                    <input type="text" name="kyw">
                    <select name="id" >
                    <option value="0" selected>Tất cả</option>
                            <?php foreach ($listtheloai as $theloai){
                                extract($theloai);
                                echo '<option value="'.$id.'">'.$genre.'</option>';
                            
                            } ?>
                        </select>
                    <input type="submit" name="listok" value="Go">
                </form>
    <div class="row formcontent">
        <form action="#" method="post">
            <div class="row mb10 formdsloai">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã phim</th>
                        <th>Tên phim</th>
                        <th>Hình ảnh</th>
                        <th>Mô tả</th>
                        <th>Thời lượng</th>
                        <th>Ngày phát hành</th>
                        <th>Đạo diễn</th>
                        <th colspan="2">Funcion</th>

                    </tr>
                    <?php
                    foreach ($listphim as $phim) {
                        extract($phim);
                        $suaphim = "index.php?act=suaphim&id=" . $id;
                        $xoaphim = "index.php?act=xoaphim&id=" . $id;
                        $hinhpath = "../upload/" . $image;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src= '" . $hinhpath . "'  width='60' height='50'>";
                        } else {
                            $hinh = " no photo ";
                        }
                        echo
                        '<tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $movie . '</td>
                                <td> ' . $title . ' </td>
                                <td> ' . $hinh . ' </td>
                                <td> ' . $description . ' </td>
                                <td> ' . $duration . ' </td>
                                <td> ' . $release_date . ' </td>
                                <td> ' . $director . ' </td>
                                <td><a href="'.$suaphim.' "><input type="button" value="Sửa"></a></td>
                                <td><a href="'.$xoaphim.'"><input type="button" value="Xóa"></a> </td>
                            </tr>';
                    }
                    ?>

                </table>
            </div>
            <div class="row mb10">
                <input type="button" value="Chọn tất cả">
                <input type="button" value="Bỏ chọn tất cả">
                <input type="button" value="Xóa các mục đã chọn">
                <a href="index.php?act=addphim"><input type="button" value="Nhập thêm"></a>
            </div>
        </form>
    </div>
</div>