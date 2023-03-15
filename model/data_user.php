<?php
function get_all_data_user(){
    $conn = connect_db();
    $stmt = $conn->prepare("SELECT * FROM table_user");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
   
    return $kq;
  }

  function delete_user($id){
    $conn = connect_db();
    $sql = "DELETE FROM table_user WHERE id=".$id;
    $conn->exec($sql);
  }

 function add_user($name , $address , $email , $username , $password){
    $conn = connect_db();
    $sql = "INSERT INTO table_user (name, address, email , username , password)
  VALUES ('".$name."', '".$address."', '".$email."' , '".$username."' , '".$password."')";
    $conn->exec($sql);
  }
?>
