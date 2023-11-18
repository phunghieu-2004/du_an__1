<?php 
function insert_phim($tenphim,$img,$mota,$thoiluong,$ngayphathanh,$daodien,$id){
    $sql = "INSERT INTO movies(title,image,description,duration,release_date,director,id) values('$tenphim','$img','$mota','$thoiluong','$ngayphathanh','$daodien','$id')";
    pdo_execute($sql);
}
function delete_phim($id){
    $sql ="delete from movies where id = ". $id;
    pdo_execute($sql);
}

function loadall_sanpham_home(){
    $sql ="select * from sanpham where 1 order by luotxem desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top10(){
    $sql ="select * from sanpham where 1 order by id desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_phim($kyw="",$id=0){


    $sql ="select * from movies where 1";
    if($kyw!=""){
        $sql.=" and movie like '%".$kyw."%'";
    }
    if($id >0){
        $sql.=" and id ='".$id."'";
    }
    $sql.=" order by id desc";
    $listphim = pdo_query($sql);
    return $listphim;
}
function load_theloai($idtl){
    if ($idtl > 0) {
    $sql ="select * from genre where id =".$idtl;
    $tl= pdo_query_one($sql);
    extract($tl);
    return $name;
    }else{
        return "";
    }
}
function loadone_sanpham($id){
    $sql ="select * from sanpham where id =".$id;
    $sp= pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id,$iddm){
    $sql ="select * from sanpham where iddm=".$iddm." AND id <>".$id;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function  update_sanpham($id,$iddm,$tensp,$giasp,$mota,$img){
    if($img!=""){
        $sql = "update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."',img='".$img."' where id=".$id;
    }else{
        $sql = "update sanpham set iddm='".$iddm."',name='".$tensp."',price='".$giasp."',mota='".$mota."' where id=".$id;
    }
    
    pdo_execute($sql);
    
   
}
