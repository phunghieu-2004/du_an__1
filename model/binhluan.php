<?php
function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql = "INSERT INTO binhluan (noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro){
    $sql ="select binhluan.id, binhluan.noidung as noidung, binhluan.ngaybinhluan as ngaybinhluan, taikhoan.user as ten from binhluan join taikhoan on binhluan.iduser = taikhoan.id where idpro = '".$idpro."' order by binhluan.id desc";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}

function loadall_binhluann($idpro){
    $sql ="select * from binhluan  where 1";
    if($idpro>0)$sql.=" AND idpro = '".$idpro."'";
    $sql.=" order by binhluan.id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}
function delete_bl($id){
    $sql ="delete from binhluan where id = ". $id;
    pdo_execute($sql);
}

?>