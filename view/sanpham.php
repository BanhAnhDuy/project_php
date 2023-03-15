<main >
   
    <?php
     foreach ($list_sp as $sp) {
        echo '  <div class="row wow bounceInLeft" data-wow-duration="2s" data-wow-offset="10"  data-wow-iteration="1">
        <div class="bg-image hover-overlay hover-zoom hover-shadow ripple col-4">
          <img src="view/img/'.$sp['img'].'" class="w-75" />
          <p>- Tình trạng: Mới<br>
            - Tên: '.$sp['tenxe'].'<br>
            - Màu xe: Trắng<br>
            - Hộp số: Số sàn<br>
            - Giá thuê xe: '.$sp['gia'].'đ</p>
          <a href="#!">
            <div class="mask" style="background-color: rgba(137, 182, 197, 0.2)">
            <img src="view/img/xe-hover1.png" class="w-100" alt="">
            
          </div>
          
          </a>
        </div>

        <div class="bg-image hover-overlay hover-zoom hover-shadow ripple col-4">
          <img src="view/img/'.$sp['img'].'" class="w-75" />
          <p>- Tình trạng: Mới<br>
            - Tên: '.$sp['tenxe'].'<br>
            - Màu xe: Trắng<br>
            - Hộp số: Số sàn<br>
            - Giá thuê xe: '.$sp['gia'].'đ</p>
          <a href="#!">
            <div class="mask" style="background-color: rgba(137, 182, 197, 0.2)">
            <img src="view/img/xe-hover1.png" class="w-100" alt="">
            
          </div>
          
          </a>
        </div>

        <div class="bg-image hover-overlay hover-zoom hover-shadow ripple col-4">
          <img src="view/img/'.$sp['img'].'" class="w-75" />
          <p>- Tình trạng: Mới<br>
            - Tên: '.$sp['tenxe'].'<br>
            - Màu xe: Trắng<br>
            - Hộp số: Số sàn<br>
            - Giá thuê xe: '.$sp['gia'].'đ</p>
          <a href="#!">
            <div class="mask" style="background-color: rgba(137, 182, 197, 0.2)">
            <img src="view/img/xe-hover1.png" class="w-100" alt="">
            
          </div>
          
          </a>
        </div>
         ';

     }
    ?>
    
    
     
</main>