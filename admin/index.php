<?php 
include "../model/sanpham.php";
include "../model/danhmuc.php"; 
include "../model/taikhoan.php"; 
include "../model/binhluan.php"; 
include "../model/pdo.php";
include "header.php";
//controllers/
if(isset($_GET['act'])){
    $act = $_GET['act'];

    switch($act){
        case 'addtl':
            //kiểm tra ng dùng click vào add ko
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $theloai = $_POST['theloai'];
                insert_theloai($theloai);
                $thongbao = "Thêm thành công" ;
            }
            include "./danhmuc/add.php";
            break;
        
        case 'listtl':
            $listtheloai = loadall_theloai();
            
            include "./danhmuc/list.php";
            break;

        case 'xoatl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_theloai($_GET['id']);
            }
            $listtheloai = loadall_theloai();
            include "./danhmuc/list.php";
            break;
        
        case 'suatl':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $tl= loadone_theloai($_GET['id']);
            }
            include "./danhmuc/update.php";
            break;
            
        case 'updatetl':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $theloai = $_POST['theloai'];
                $id = $_POST['id'];
                update_theloai($id,$theloai);
                $capnhat = "Cập nhật thành công" ;
            }

            $listtheloai = loadall_theloai();
            include "./danhmuc/list.php";
            break;   
            // controller sản phẩm

            case 'addphim':
                //kiểm tra ng dùng click vào add ko
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $id = $_POST['id'];
                    $tenphim = $_POST['tenphim'];
                    $thoiluong = $_POST['thoiluong'];
                    $ngayphathanh = $_POST['ngayphathanh'];
                    $mota = $_POST['mota'];
                    $daodien = $_POST['daodien'];
                    $img = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                    insert_phim($tenphim,$img,$mota,$thoiluong,$ngayphathanh,$daodien,$id);
                    $thongbao = "Thêm thành công" ;
                }
                $listtheloai = loadall_theloai();
                include "./sanpham/add.php";
                break;
           
            
            case 'listphim':
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['id'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listtheloai = loadall_theloai();
                $listphim = loadall_phim($kyw,$iddm);
                include "./sanpham/list.php";
                break;
    
            case 'xoaphim':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_phim($_GET['id']);
                }
                $listphim = loadall_phim("",0);
                $listtheloai = loadall_theloai();
                include "./sanpham/list.php";
                break;
            
            case 'suasp':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $sanpham= loadone_sanpham($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "./sanpham/update.php";
                break;
                
            case 'updatesp':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $img = $_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                    move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
                    update_sanpham($id,$iddm,$tensp,$giasp,$mota,$img);
                    $capnhat = "Cập nhật thành công" ;
                    
                }
                
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include "./sanpham/list.php";
                break;

            case 'dskh':
                
                $listtaikhoan = loadall_taikhoan();
                include "./taikhoan/list.php";
                break;

            case 'xoatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_taikhoan($_GET['id']);
                }
                $listtaikhoan  = loadall_taikhoan();
                include "./taikhoan/list.php";
                break;
            
            case 'suatk':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $taikhoan = loadone_taikhoan($_GET['id']);
                }
                include "./taikhoan/update.php";
                break;
            
            case 'updatetk':
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $id = $_POST['id'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    update_takhoan($id,$user,$pass,$email,$address,$tel,$role);
                    $capnhat = "Cập nhật thành công" ;
                }
                $listtaikhoan  = loadall_taikhoan();
                include "./taikhoan/list.php";
                break;

                case 'dsbl':
                
                    $listbinhluan = loadall_binhluann(0);
                    include "./binhluan/list.php";
                    break;
                
                case 'xoabl':
                    if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_bl($_GET['id']);
                    }
                    $listbinhluan = loadall_binhluann(0);
                    include "./binhluan/list.php";
                    break;

        default:
        include "home.php";
        break;
    }

}
else{
    include "home.php";
}


include "footer.php";
