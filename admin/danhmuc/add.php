<div class="row">
            <div class="row formtitle"><h1>Thêm mới thể loại phim</h1></div>
            <div class="row formcontent">
                <form action="index.php?act=addtl" method="post">
                    <div class="row mb10">
                    Mã thể loại <br>
                    <input type="text" name="maloai" disabled>
                    </div>
                    <div class="row mb10">
                    Tên thể loại <br>
                    <input type="text" name="theloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
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