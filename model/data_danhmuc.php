<?php
  function get_all_data_dm(){
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM table_danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
   
    return $kq;
  }

  function delete_danhmuc($id){
    $conn = connect_db();
    $sql = "DELETE FROM table_danhmuc WHERE id=".$id;
    $conn->exec($sql);
  }

  function lay_danhmuc($id){
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM table_danhmuc WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
  }

  function edit_danhmuc($id,$tendm){
    $conn = connect_db();
    $sql = "UPDATE table_danhmuc SET tendm='".$tendm."'  WHERE id=".$id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
  }

  function add_danhmuc($tendm){
    $conn = connect_db();
    $sql = "INSERT INTO table_danhmuc (tendm) VALUES ('".$tendm."')";
    $conn->exec($sql);
  }
  
?>