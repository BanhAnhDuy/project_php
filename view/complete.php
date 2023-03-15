<style>


/* Add padding to containers */
.con {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
/* Removes the clear button from date inputs */
input[type="date"]::-webkit-clear-button {
    display: none;
}

/* Removes the spin button */
input[type="date"]::-webkit-inner-spin-button { 
    display: none;
}

/* Always display the drop down caret */
input[type="date"]::-webkit-calendar-picker-indicator {
    color: #2c3e50;
}

/* A few custom styles for date inputs */
input[type="date"] {
    appearance: none;
    -webkit-appearance: none;
    color: #95a5a6;
    font-family: "Helvetica", arial, sans-serif;
    font-size: 18px;
    border:1px solid #ecf0f1;
    background:#ecf0f1;
    padding:5px;
    display: inline-block !important;
    visibility: visible !important;
}

input[type="date"], focus {
    color: #95a5a6;
    box-shadow: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
}
</style>

<div class="login-page">
  <div class="form">
  
<div style="background-image:url('view/img/meme.png')"  class=" border border-2 rounded-2 ">
    
     
    <form action="index.php?action=add_complete" method="post"> 
  <div class="con">
    <h1 class="text-warning">XÁC NHẬN THUÊ XE</h1>
    <p class="text-white">Lưu ý : Khi giao xe sẽ yêu cầu thêm GPLX cùng cấp và CCCD photo!</p>
    <hr>

    <label ><b class="text-white">Họ&Tên:</b></label>
    <input type="text" placeholder="Nhập họ tên đầy đủ..." name="hoten"  required>

    <label ><b class="text-white">SĐT:</b></label>
    <input type="text" placeholder="Nhập sđt..." name="sdt"  required>

    <label ><b class="text-white">Địa Chỉ:</b></label>
    <input type="text" placeholder="Nhập địa chỉ...." name="dchi"  required>

    <label ><b class="text-white">Ngày nhận:</b></label>
    <input type="date"  name="ngaynhan"  required>
    <br>
    
    
   <?php
    foreach ($ten_sp as $sp) { 
      echo'<label ><b class="text-white">'.$sp['tenxe'].':</b></label>
      <input type="radio"  name="canthue" value="'.$sp['tenxe'].'" required> <br>' ;
   }
    ?>
    <hr>

    <p>Để thuê xe cần đồng ý các  <a href="#">Điều khoản bảo mật </a>.</p>
    <input type="submit" class="registerbtn" name="gui" value="GỬI">
  </div>

  
</form> 
     

    
</div>
