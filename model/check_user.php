<?php

function checkuser($user,$pass){
  $conn = connect_db();
  $stmt = $conn->prepare("SELECT * FROM table_user WHERE username='".$user."' AND password='".$pass."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
   if(count($kq)>0) return $kq[0]['role'];
   else return 0;
}

function getuserinfo($user,$pass){
  $conn = connect_db();
  $stmt = $conn->prepare("SELECT * FROM table_user WHERE username='".$user."' AND password='".$pass."'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq = $stmt->fetchAll();
   return $kq;
}

?>