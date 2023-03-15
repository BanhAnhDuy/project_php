<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>DỊCH VỤ THUÊ XE</title>
   <link rel="stylesheet" href="view/css/style.css">
   <link rel="stylesheet" href="view/css/animate.css">
   <link rel="stylesheet" href="view/css/location.css">
    <link rel="icon" href="view/img/logo.png" type="image/x-icon" />
    
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"/>
    
    <link rel="stylesheet" href="view/css/mdb.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="view/js/timkiem.js"></script>
    <script src="view/js/wow.min.js"></script>
    <script >
      new WOW().init();
    </script>
    
  </head>
  <body class="preloading container-fluid">
    <div class="load">
      <img src="view/img/load.gif" >
   </div>
   
    <header >
      <!-- Navbar -->
<nav style="background-color: rgb(161, 197, 250);" class="navbar navbar-expand-lg navbar-light ">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler btn-secondary"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars-staggered"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse animate__animated animate__flash" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
        <img
          src="view/img/logo.png"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item box badge-primary rounded-5 m-1  ">
          <a class="nav-link text-white text-center " href="index.php">Trang Chủ</a>
        </li>
        <li class="nav-item  box badge-primary rounded-5  m-1">
          <a class="nav-link  text-white text-center" href="index.php?action=thuexe">Thuê Xe</a>
        </li>
        <li class="nav-item  box badge-primary rounded-5 m-1">
          <a class="nav-link  text-white text-center" href="index.php?action=location">Tour Du Lịch</a>
        </li>
        <li class="nav-item dropdown m-1 ">
          <a
            class="nav-link btn btn-primary btn-lg dropdown-toggle text-center  text-white h6"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
            Phân Khúc
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
              foreach ($list_danhmuc as $dm ) {
                echo'<li>
                <a class="dropdown-item" href="index.php?action=sanpham&id='.$dm['id'].'">'.$dm['tendm'].'</a>
              </li>
               ';
              }
            ?>
          </ul>
        </li>
       
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

   
    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <form class="d-flex input-group w-auto">
        <input id="search-item"
          type="search"
          class="form-control rounded"
          placeholder="Nhập vào đây..."
          aria-label="Search"
          aria-describedby="search-addon"
          onkeyup="search()"
        />
        <span class="input-group-text border-0 " id="search-addon">
         <button class="btn btn-outline-dark"> 
          <i class="fas fa-search"></i>
         </button>
        </span>
        <span class="input-group-text border-0" id="search-addon">
        <?php 
    if(isset($_SESSION['username'])&&($_SESSION['username']!="")){
       echo '<a class="btn btn-primary px-3 me-2" href="index.php?action=review">'.$_SESSION['username'].'</a>';
       echo '<a class="btn btn-outline-success px-3 me-2" href="index.php?action=logout">Thoát</a>';
    }else{

    
    ?>
            <a class="btn btn-primary px-3 me-2" href="login.php">Đăng Nhập</a>
          
            <a class="btn btn-outline-success px-3 me-2" href="index.php?action=register">Đăng Ký</a>
        </span>
        <?php }?>
      </form>
    </div>
 <!-- Right elements -->
 <div class="d-flex align-items-center mt-1">
  <!-- Icon -->
  
  <a class="text-reset me-3" href="#">
    <i class="fas fa-car"></i>
  </a>

  <!-- Notifications -->
  <div class="dropdown">
    <a
      class="text-reset me-3 dropdown-toggle hidden-arrow"
      href="#"
      id="navbarDropdownMenuLink"
      role="button"
      data-mdb-toggle="dropdown"
      aria-expanded="false"
    >
      <i class="fas fa-bell"></i>
      <span class="badge rounded-pill badge-notification bg-danger">3</span>
    </a>
    <ul
      class="dropdown-menu dropdown-menu-end"
      aria-labelledby="navbarDropdownMenuLink"
    >
      <li>
        <a class="dropdown-item" href="#">11:52:67 - KM 50% tiền xăng</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">0:20:11 - Tour du lịch giảm 10%</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">07:55:02 - Bảo hiểm xe toàn diện</a>
      </li>
    </ul>
  </div>
  <!-- Avatar -->
  <div class="dropdown">
    <a
      class="dropdown-toggle d-flex align-items-center hidden-arrow"
      href="#"
      id="navbarDropdownMenuAvatar"
      role="button"
      data-mdb-toggle="dropdown"
      aria-expanded="false"
    >
   
      <img
        src="view/img/anime.jpg"
        class="rounded-circle"
        height="25"
        alt="Black and White Portrait of a Man"
        loading="lazy"
      />
    </a>
    <ul
      class="dropdown-menu dropdown-menu-end"
      aria-labelledby="navbarDropdownMenuAvatar"
    >
      
      <li>
        <a class="dropdown-item" href="#">Thanh Toán &nbsp;<i class="fas fa-credit-card"></i></a>
      </li>
      <li><hr class="dropdown-divider" /></li>
      <li>
        <a class="dropdown-item" href="index.php">Đăng Xuất &nbsp; <i class="fas fa-sign-out"></i></a>
      </li>
    </ul>
  </div>
</div>
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Carousel -->
<!-- Carousel wrapper -->
<div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      data-mdb-target="#carouselDarkVariant"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      data-mdb-target="#carouselDarkVariant"
      data-mdb-slide-to="1"
      aria-label="Slide 1"
    ></button>
    <button
      data-mdb-target="#carouselDarkVariant"
      data-mdb-slide-to="2"
      aria-label="Slide 1"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner ">
    <!-- Single item -->
    <div class="carousel-item active  ">
      <img src="view/img/banner.jpg" class="d-block w-100 " alt=""/>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white">1</h5>
        
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item ">
      <img src="view/img/banner1.jpg" class="d-block w-100 " alt=""/>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white">2</h5>
        
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item ">
      <img src="view/img/banner2.jpg" class="d-block w-100" alt=""/>
      <div class="carousel-caption d-none d-md-block">
        <h5 class="text-white">3</h5>
        
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev " type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden ">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
<!-- Carousel-->

    </header>


    
