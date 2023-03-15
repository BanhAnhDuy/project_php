<?php
  
  session_start();
  ob_start();
  
 
    include "model/db_connect.php";
    include "model/check_user.php";
    include "model/data_user.php";
    include "model/data_danhmuc.php";
    include "model/data_sanpham.php";
    include "model/data_donthue.php";
 // connect_db();

     $list_danhmuc=get_all_data_dm();
      include "view/header.php";
  
     if(isset($_GET['action'])&&($_GET['action']!="")){
        switch ($_GET['action']) {
          case 'logout':
          unset($_SESSION['role']);
          unset($_SESSION['id']);
          unset($_SESSION['username']);
          header("location: index.php");
          break;
           case 'location':
          include "view/location.php";
           break;
           case 'add_complete':
            if(isset($_POST['gui'])&&($_POST['gui'])){
              $hoten = $_POST['hoten'];
              $sdt = $_POST['sdt'];
              $dchi = $_POST['dchi'];
              $ngaynhan = $_POST['ngaynhan'];
              $canthue = $_POST['canthue'];
              add_complete($hoten , $sdt , $dchi , $ngaynhan , $canthue);
              echo "<script type='text/javascript'>confirm('ĐƠN THUÊ XE ĐÃ ĐẶT THÀNH CÔNG !!!!');</script>";
              $ten_sp=get_ten_sp();
            }
            
          include "view/complete.php";
           break;
           case 'complete':
            $ten_sp=get_ten_sp();
            include "view/complete.php";
             break;
           case 'thuexe':
            $list_sp=get_all_sp();
            include "view/thuexe.php";
             break;
            case 'sanpham':
              if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
              }
              $list_sp=get_all_sp($id,"");
             include "view/sanpham.php";
               break;
               
                      case 'register':
                        if(isset($_POST['dangky'])&&($_POST['dangky'])){
                          $name = $_POST['ten-user'];
                          $address = $_POST['diachi'];
                          $email = $_POST['email'];
                          $username = $_POST['ten-username'];
                          $password = $_POST['pass'];
                          add_user($name , $address , $email , $username , $password);
                          echo "<script type='text/javascript'>alert('ĐĂNG KÝ TÀI KHOẢN THÀNH CÔNG !!!!');</script>";
                        }
                        
                      include "view/register.php";
                       break;

                       case 'review':
                        $list_dt=get_all_data_donthue();
                        include "view/review.php";
                         break;
         // default:
         // include "view/body.php";
          // break;
      }
    }else{
    include "view/body.php";
    }

   
    include "view/footer.php";

    
?>

