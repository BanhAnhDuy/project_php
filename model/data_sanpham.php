<?php
 function get_all_sp($iddm=0 , $kw=""){
    $conn = connect_db();
    $sql ="SELECT * FROM table_xe WHERE 1";
    if($iddm>0) $sql.=" AND iddm=".$iddm;
    if($kw!="") $sql.=" AND tendm like '%".$iddm."%'";
    $stmt = $conn->prepare("SELECT * FROM table_xe");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
   
    return $kq;
 }

 function get_ten_sp(){
   $conn = connect_db();
   $stmt = $conn->prepare("SELECT tenxe FROM table_xe");
   $stmt->execute();
   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
   $kq = $stmt->fetchAll();
   
    return $kq;
 }
?>