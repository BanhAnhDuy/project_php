<?php
  @session_start();
  ob_start();
  include "model/db_connect.php";
  include "model/data_danhmuc.php";
  include "model/data_user.php";
  include "model/data_donthue.php";
  include "view/header-admin.php";
  if(isset($_GET['page'])&&($_GET['page']!="")){
    switch ($_GET['page']) {
      case 'add_dm':
        if(isset($_POST['add-new'])&&($_POST['add-new'])){
          $tendm = $_POST['ten-dm'];
          add_danhmuc($tendm);
        }
        $kq=get_all_data_dm();
      include "view/danhmuc.php";
       break;
       case 'danhmuc':
        $kq=get_all_data_dm();
      include "view/danhmuc.php";
       break;
       case 'delete_user':
        if(isset($_GET['id'])){
          $id = $_GET['id'];
          delete_user($id);
        }
        $kq=get_all_data_user();
        include "view/taikhoan.php";
         break;
         case 'delete_complete':
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            delete_complete($id);
          }
          $kq=get_all_data_donthue();
          include "view/donthue.php";
           break;
         case 'delete_dm':
          if(isset($_GET['id'])){
            $id = $_GET['id'];
            delete_danhmuc($id);
          }
          $kq=get_all_data_dm();
           include "view/danhmuc.php";
           break;
         case 'taikhoan':
          $kq=get_all_data_user();
          include "view/taikhoan.php";
           break;
           case 'edit_dm':
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $kq_1=lay_danhmuc($id);

              $kq=get_all_data_dm();
            include "view/edit_danh_muc.php";
            }
            if(isset($_POST['id'])){
              $id = $_POST['id'];
              $tendm = $_POST['ten-dm'];
              edit_danhmuc($id,$tendm);

              $kq=get_all_data_dm();
            include "view/danhmuc.php";
            }
            
             break;
           case 'donthue':
            $kq=get_all_data_donthue();
            include "view/donthue.php";
             break;
             case 'logout':
              include "index.php";
               break;
       }
      }else{
        include "view/body-admin.php";
        }
   include "view/footer-admin.php";      
?>

