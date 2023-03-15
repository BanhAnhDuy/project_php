<h1>ĐƠN HÀNG ĐÃ THUÊ</h1>
<main >

<?php
    foreach ($list_dt as $dt){

        echo' 
        <table class="table table-bordered border-primary" >
          <thead class="h3">
          <tr>
          <th>Tên User </th>
          <th>Ngày Thuê</th>
          <th>Loại Xe</th>
          </tr>
          </thead>
          <tbody >
          <tr>
          <td>'.$_SESSION['username'].'</td>
          <td>'.$dt['ngaynhan'].'</td>
          <td>'.$dt['canthue'].'</td>
          </tr>
          </tbody>
        </table>
        
        ';
    }
    
    ?>
</main>
