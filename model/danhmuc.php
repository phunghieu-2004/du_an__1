<?php 
function insert_theloai($theloai){
    $sql = "INSERT INTO genre(genre) values('$theloai')";
    pdo_execute($sql);
}
function delete_theloai($id){
    $sql ="delete from genre where id = ". $id;
    pdo_execute($sql);
}

function loadall_theloai(){
    $sql ="select * from genre order by id desc";
    $listtheloai = pdo_query($sql);
    return $listtheloai;
}
function loadone_theloai($id){
    $sql ="select * from genre where id =".$id;
    $tl= pdo_query_one($sql);
    return $tl;
}
function update_theloai($id,$theloai){
    $sql = "update genre set genre='".$theloai."' where id=".$id;
    pdo_execute($sql);
}

?>