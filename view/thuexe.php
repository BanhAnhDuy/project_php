<main >
   
    <?php
     foreach ($list_sp as $sp) {
        echo '  
        <div class="row wow bounceInUp" data-wow-duration="2s" data-wow-offset="10"  data-wow-iteration="1">
        <div class="bg-image hover-overlay hover-zoom hover-shadow ripple col-4">
          <img src="view/img/'.$sp['img'].'" class="w-75" />
          <p>- Tình trạng: Mới<br>
            - Tên: '.$sp['tenxe'].'<br>
            - Động cơ :Turbo 4.0 Xtra<br>
            - Hộp số: Số sàn<br>
            - Giá thuê xe: '.$sp['gia'].'đ</p>
          <a href="index.php?action=complete">
            <div class="mask text-center" style="background-color: rgba(137, 182, 197, 0.2)">
            <img src="view/img/xe-hover1.png" class="w-100" alt="">
            <button class="btn btn-success">Đặt Xe</button>
          </div>
          
          </a>
        </div>

        <div class="bg-image hover-overlay hover-zoom hover-shadow ripple col-4">
          <img src="view/img/'.$sp['img'].'" class="w-75" />
          <p>- Tình trạng: Mới<br>
            - Tên: '.$sp['tenxe'].'<br>
            - Động cơ :Dual VVT-i<br>
            - Hộp số: Số sàn<br>
            - Giá thuê xe: '.$sp['gia'].'đ</p>
          <a href="index.php?action=complete">
            <div class="mask text-center" style="background-color: rgba(137, 182, 197, 0.2)">
            <img src="view/img/xe-hover1.png" class="w-100" alt="">
            <button class="btn btn-warning">Đặt Xe</button>
          </div>
          
          </a>
        </div>

        <div class="bg-image hover-overlay hover-zoom hover-shadow ripple col-4">
          <img src="view/img/'.$sp['img'].'" class="w-75" />
          <p>- Tình trạng: Mới<br>
            - Tên: '.$sp['tenxe'].'<br>
            - Động cơ :DOHC i-VTEC<br>
            - Hộp số: Số sàn<br>
            - Giá thuê xe: '.$sp['gia'].'đ</p>
          <a href="index.php?action=complete">
            <div class="mask text-center" style="background-color: rgba(137, 182, 197, 0.2)">
            <img src="view/img/xe-hover1.png" class="w-100" alt="">
            <button class="btn btn-dark">Đặt Xe</button>
          </div>
          
          </a>
        </div>
         ';

     }
    ?>
    
    
     
</main>