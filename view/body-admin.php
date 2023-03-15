<body class="preloading container-fluid">
    <div class="load">
      <img src="view/img/load.gif" >
   </div>
<header>


  <div class="container">
    <a class="navbar-brand " href="index.php"
      ><img
        id="MDB-logo"
        src="view/img/logo.png"
        alt="MDB Logo"
        draggable="false"
        height="80"
    /></a>
    <button
      class="navbar-toggler border border-1 hover-overlay hover-shadow ripple text-white"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item border border-1 m-1 border-warning rounded-2 hover-shadow  "  >
          <a class="h4  text-white nav-link mx-2" href="index.php"><i class="text-warning fas fa-home pe-2"></i>Trang Chủ</a>
        </li>
        <li class="nav-item border border-1 m-1 border-warning rounded-2 hover-shadow">
          <a class=" h4  text-white nav-link mx-2" href="admin.php?page=danhmuc"><i class="text-warning fas fa-list pe-2 "></i>Danh Mục</a>
        </li>
        <li class="nav-item border border-1 m-1 border-warning rounded-2 hover-shadow">
          <a class="h4  text-white nav-link mx-2" href="index.php"><i class="text-warning fas fa-sign-out pe-2"></i>Đăng Xuất</a>
        </li>
        <li class="nav-item border border-1 m-1 border-warning rounded-2 hover-shadow">
          <a class="h4  text-white nav-link mx-2" href="admin.php?page=taikhoan"><i class="text-warning fas fa-user pe-2"></i>Tài Khoản</a>
        </li>
        <li class="nav-item border border-1 m-1 border-warning rounded-2 hover-shadow">
          <a class="h4  text-white nav-link mx-2" href="admin.php?page=donthue"><i class="text-warning fas fa-car pe-2"></i>Đơn Thuê</a>
        </li>
      </ul>
    </div>
  </div>


</header>

<main>
<h1 class=" text-white text-center border border-4 border-warning m-1 rounded-2" >GIAO DIỆN ADMIN</h1>

<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-3 text-white">
        <div class="panel panel-blue panel-widget ">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">1</div>
                    <div class="text-white">Đơn hàng</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3 text-white">
        <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">2</div>
                    <div class="text-white">Phản hồi</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3 text-white">
        <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">3</div>
                    <div class="text-white">Thành viên</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-6 col-lg-3 text-white">
        <div class="panel panel-red panel-widget">
            <div class="row no-padding">
                <div class="col-sm-3 col-lg-5 widget-left">
                    <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
                </div>
                <div class="col-sm-9 col-lg-7 widget-right">
                    <div class="large">60</div>
                    <div class="text-white">Người xem</div>
                </div>
            </div>
        </div>
    </div>
</div><!--/.row-->
</main>




   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="view/js/mdb.min.js"></script>
    <script src="view/js/home.js"></script>
</body>