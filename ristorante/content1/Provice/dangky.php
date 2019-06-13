<?php
  if(isset($_POST['gui'])){
    $tenkh=$_POST['hoten'];
    $email=$_POST['email'];
    $diachi=$_POST['diachi'];
    $pass=$_POST['pass'];
    $dienthoai=$_POST['dienthoai'];
    $sql="select email from dangky where email='$email'";
    $ki=mysql_query($sql);
    $row=mysql_num_rows($ki);
    if($row!=$email){
      echo"<script>alert('Tài Khoản này đã tồn tại')</script>";
      }else{
    $sql_dangky=mysql_query("insert into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan) value('$tenkh','$email','$pass','$dienthoai','$diachi')");
        
        if($sql_dangky){
    echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
    echo '<a href="?quanly=login" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
  }}
  }
?>

<div>
<p style="font-size:18px; color:red;margin:5px;">Các mục dấu * là bắt buộc tối thiểu. Vui lòng điền đầy đủ và chính xác (Số nhà, Ngõ, thôn xóm/ấp, Phường/xã, huyện/quận, tỉnh, TP)</p>
<form method="post" enctype="multipart/form-data">
  <table width="100%" border="1" style="border-collapse:collapse;">
    <tr>
      <td width="40%">Họ tên người mua <strong style="color:red;"> (*)</strong></td>
      <td width="60%"><input type="text" name="hoten" size="50"></td>
    </tr>
    <tr>
      <td>Địa chỉ Email <strong style="color:red;"> (*)</strong></td>
      <td width="60%"><input type="text" name="email" size="50"></td>
    </tr>
    <tr>
      <td>Mật khẩu <strong style="color:red;"> (*)</strong></td>
      <td width="60%"><input type="password" name="pass" size="50"></td>
    </tr>
    <tr>
      <td>Điện thoại <strong style="color:red;"> (*)</strong></td>
      <td width="60%"><input type="text" name="dienthoai" size="50"></td>
    </tr>
    <tr>
      <td>Địa chỉ nhận hàng <strong style="color:red;"> (*)</strong></td>
      <td width="60%"><input type="text" name="diachi" size="50"></td>
    </tr>
    <tr>
      <td colspan="2"><p>
          <input type="submit" name="gui" value="Gửi thông tin" />
        </p></td>
    </tr>
  </table>
</form>
<div>
<p>Ghi chú nếu có :</p>
<textarea name="ghichu">
    
    </textarea>
