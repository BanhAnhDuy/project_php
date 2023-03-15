<nav class="border border-2 text-center text-white" >
    |&nbsp;<a class="text-white" href="admin.php">Trang Chủ Admin</a>&nbsp;| 
    <a class="text-white" href="admin.php?page=taikhoan">Tài Khoản</a> |
    <a class="text-white" href="admin.php?page=danhmuc">Danh Mục</a>&nbsp;|
</nav>
<hr class="border border-5">
<h2 class="text-white text-center">Quản Lý Đơn Thuê</h2>

<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ&Tên</th>
      <th scope="col">SĐT</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Ngày Nhận</th>
      <th scope="col">Cần Thuê</th>
      <th scope="col">Xử Lý</th>
      <th scope="col">Trạng Thái</th>
    </tr>
  </thead>
  <?php
  //var_dump($kq);
  ?>
  <?php
   if(isset($kq)&&(count($kq)>0)){
    $i=1;
       foreach ($kq as $item ) {
         echo '<tbody>
         <tr>
           <th scope="row">'.$i.'</th>
           <td>'.$item['hoten'].'</td>
           <td>'.$item['sdt'].'</td>
           <td>'.$item['diachi'].'</td>
           <td>'.$item['ngaynhan'].'</td>
           <td>'.$item['canthue'].'</td>
           <td><a class="btn btn-success m-1" href="admin.php?page=delete_complete&id='.$item['id'].'" >Hủy Đơn</a></td>
         
         
         

       ';
       $i++;
    }
   }
  ?>
  <td><button id="duyet" class="btn btn-primary m-1" onclick="done()" >Duyệt Đơn</button></td> 
</tr> 
  </tbody> 
</table>
<script>
function done(){
  let duyet = document.getElementById('duyet')
  duyet.innerHTML ='<img src="view/img/check.png" width="22px">'
         }
</script>


