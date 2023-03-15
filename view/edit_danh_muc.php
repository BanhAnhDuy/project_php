<nav class="border border-2 text-center text-white" >
    |&nbsp;<a class="text-white" href="admin.php">Admin</a>| 
    <a class="text-white" href="admin.php?page=thuexe">Thuê Xe</a> |
    <a class="text-white" href="admin.php?page=taikhoan">Tài Khoản</a> |
    <a class="text-white" href="admin.php?page=donthue">Đơn Thuê</a>&nbsp;|
</nav>
<hr class="border border-5">
<h2 class="text-white text-center">Sửa Các Danh Mục</h2>
<form class="text-center" action="admin.php?page=edit_dm" method="post">
    <input type="text" name="ten-dm" value="<?=$kq_1[0]['tendm']?>">
    <input type="hidden" name="id" value="<?=$kq_1[0]['id']?>" >
    <input type="submit" name="capnhat" value="Cập Nhật"> 

</form> <br>
<table class="table text-white">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên Danh Mục</th>
      <th scope="col">Thứ Tự</th>
      <th scope="col">Hiển Thị</th>
      <th scope="col">Tùy Chọn</th>
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
           <td>'.$item['tendm'].'</td>
           <td>'.$item['uutien'].'</td>
           <td>'.$item['hienthi'].'</td>
           <td><a class="btn btn-primary m-1" href="admin.php?page=edit_dm&id='.$item['id'].'">Sửa</a><a class="btn btn-success m-1" href="admin.php?page=delete_dm&id='.$item['id'].'">Xóa</a></td>
         </tr>
         
       </tbody>';
       $i++;
    }
   }
  ?>
  
</table>


