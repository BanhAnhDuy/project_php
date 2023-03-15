<?php
function add_complete($hoten , $sdt , $dchi , $ngaynhan , $canthue){
    $conn = connect_db();
    $sql = "INSERT INTO table_confirm (hoten, sdt, diachi , ngaynhan , canthue)
  VALUES ('".$hoten."', '".$sdt."', '".$dchi."' , '".$ngaynhan."' , '".$canthue."')";
    $conn->exec($sql);
  }

function get_all_data_donthue(){
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM table_confirm");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
   
    return $kq;
  }  

function delete_complete($id){
    $conn = connect_db();
    $sql = "DELETE FROM table_confirm WHERE id=".$id;
    $conn->exec($sql);
  } 
?>