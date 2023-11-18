<div class="row">
            <div class="row formtitle">
                <h1>Thêm mới Phim</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=addphim" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    Thể loại phim<br>
                        <select name="id" >
                            <?php foreach ($listtheloai as $theloai){
                                extract($theloai);
                                echo '<option value="'.$id.'">'.$genre.'</option>';
                            
                            } ?>
                        </select>
                    </div>
                    <div class="row mb10">
                    Tên phim<br>
                    <input type="text" name="tenphim">
                    </div>
                    <div class="row mb10">
                    Hình ảnh<br>
                    <input type="file" name="hinh">
                    </div>
                    <div class="row mb10">
                    Mô tả <br>
                    <textarea name="mota"  cols="30" rows="10"></textarea>
                    </div>
                    <div class="row mb10">
                    Thời lượng<br>
                    <input type="text" name="thoiluong">
                    </div>
                    <div class="row mb10">
                    Ngày phát hành<br>
                    <input type="date" name="ngayphathanh">
                    </div>
                    <div class="row mb10">
                    Đạo diễn<br>
                    <input type="text" name="daodien">
                    </div>
                    
                    
                    
                    <div class="row mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listphim"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao != ""))
                     echo $thongbao;
                     ?>
                </form>
            </div>
        </div>
    </div>