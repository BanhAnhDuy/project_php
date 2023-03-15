<?php
  
  @session_start();
  ob_start();
  include "model/db_connect.php";
 // connect_db();
  include "model/check_user.php";

  if((isset($_POST['dangnhap']))&&($_POST['dangnhap'])){
   $user = $_POST['username'];
   $pass = $_POST['password'];
   $kq= getuserinfo($user,$pass);
   $role =$kq[0]['role'];
   if($role==1){
    $_SESSION['role']=$role;
    header("location: admin.php");
   }
   else{
    $_SESSION['role']=$role;
    $_SESSION['id']=$kq[0]['id'];
    $_SESSION['username']=$kq[0]['username'];
    header("location: index.php");
     
   }
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="icon" href="view/img/logo.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    
    <link rel="stylesheet" href="view/css/mdb.min.css" />
    <link rel="stylesheet" href="view/css/style.css">
    
 
    
</head>
<body class="preloading container-fluid">
    <div class="load">
      <img src="view/img/load.gif" >
   </div>
  
   <style>
    

@import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 400px;
  margin: 0 auto 50px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius:5px;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 2;
  background: #f2f2f2;
  width: 100%;
  border: 1;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 18px;
  border-radius:5px;
}


.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
#dn{
  background-color: #80b3ff;
}

body {
  background-image: url('./view/img/dalat1.jpg'); 
  background-image: url('./view/img/dalat1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}




   </style>
  

<div class="login-page">
  <div class="form">
    <h1>ĐĂNG NHẬP</h1>
    <form class="login-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
      <input name="username" type="text" placeholder="Nhập Username..." required/>
      <input name="password" type="password" placeholder="Nhập Password..." required/>
      <input name="dangnhap" id="dn" type="submit" value="Đăng Nhập">
      <?php 
      if(isset($alert_error)&&($alert_error!="")){
        echo "<script type='text/javascript'>alert('$alert_error');</script>";
      }
      ?>
    </form>
    <div class="text-center">
    <p>Chưa có Tài Khoản? <a href="index.php?action=register">Đăng Ký Ngay!</a></p>
    <p><a href="#">Quên mật khẩu?</a></p>
    <p>Hoặc đăng nhập:</p>
    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button type="button" class="btn btn-primary btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
  </div>
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="view/js/mdb.min.js"></script>
    <script src="view/js/home.js"></script>
</body>
</html>
