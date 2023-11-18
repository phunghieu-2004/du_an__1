<?php 
    if(is_array($tl)){
        extract($tl);
    }
?>
<div class="row">
            <div class="row formtitle"><h1>UPDATE THỂ LOẠI</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=updatetl" method="post">
                    <div class="row mb10">
                    Mã loại <br>
                    <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                    Tên loại <br>
                    <input type="text" name="theloai" value="<?php if(isset($genre)&&($genre !="")) echo $genre; ?>">
                    </div>
                    <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listtl"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao != ""))
                     echo $thongbao;
                     ?>
                </form>
            </div>
        </div>
    </div>