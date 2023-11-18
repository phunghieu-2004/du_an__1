<?php 
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
?>
<div class="row">
            <div class="row formtitle"><h1>UPDATE THÔNG TIN TÀI KHOẢN</h1></div>
            <div class="row formcontent">
            <form action="index.php?act=updatetk" method="post">
                    
                    <input type="hidden" name="id" value="<?=$id?>">
                    <div class="row mb10">
                    Tên đăng nhập <br>
                    <input type="text" name="user" value="<?=$user?>">
                    </div>
                    <div class="row mb10">
                    mật khẩu <br>
                    <input type="text" name="pass" value="<?=$pass?>">
                    </div>
                    <div class="row mb10">
                    Email<br>
                    <input type="email" name="email" value="<?=$email?>">
                    </div>
                    <div class="row mb10">
                    Địa chỉ <br>
                    <input type="text" name="address" value="<?=$address?>">
                    </div>
                    <div class="row mb10">
                    Điện thoại <br>
                    <input type="text" name="tel" value="<?=$tel?>">
                    </div>
                    <div class="row mb10">
                    Role<br>
                    <input type="number" name="role" value="<?=$role?>">
                    </div>
                    
                    <div class="row mb10">
                        <input type="submit" name="capnhat" value="Cập nhật">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=dskh"><input type="button" value="Danh sách"></a>
                    </div>





                    
                    <?php
                    if(isset($thongbao)&&($thongbao != ""))
                     echo $thongbao;
                     ?>
                </form>
            </div>
        </div>
    </div>