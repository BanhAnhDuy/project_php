<nav class="border border-2 text-center text-white" >
    |&nbsp;<a class="text-white" href="admin.php">Trang Chủ Admin</a>&nbsp;| 
    <a class="text-white" href="admin.php?page=danhmuc">Danh Mục</a> |
    <a class="text-white" href="admin.php?page=donthue">Đơn Thuê</a>&nbsp;|
</nav>
<hr class="border border-5">
<h2 class="text-white text-center">Quản Lý Tài Khoản</h2>

<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      <th scope="col">Trạng Thái</th>
      <th scope="col">Hành Động</th>
    </tr>
  </thead>
  
  <?php
   if(isset($kq)&&(count($kq)>0)){
    $i=1;
       foreach ($kq as $item ) {
         echo '<tbody>
         <tr>
           <th scope="row">'.$i.'</th>
           <td>'.$item['name'].'</td>
           <td>'.$item['address'].'</td>
           <td>'.$item['email'].'</td>
           <td>'.$item['username'].'</td>
           <td>'.$item['password'].'</td>
           <td>'.$item['role'].'</td>
           <td><a class="btn btn-success m-1" href="admin.php?page=delete_user&id='.$item['id'].'">Xóa</a></td>
         </tr>
         
       </tbody>';
       $i++;
    }
   }
  ?>
  
</table>
