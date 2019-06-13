<form method="post" >
    <div class="hi" align="center">
      <label for="uname"><b>Username</b></label>
      <input type="text" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" name="pass" required>
      <label for="uname"><b>email</b></label>
      <input type="text" name="email" required>
      <label for="psw"><b>Địa chỉ</b></label>
      <input type="text" name="diachi" required>
       <label for="psw"><b>Điện thoại</b></label>
      <input type="text" name="phone" required>
      <button type="submit" name="btnLogin">Cập Nhật</button>
    </div>
  </form>
  <?php if(isset($_POST['btnLogin'])){
	  $user=$_POST['uname'];
	  $pass=$_POST['pass'];
	  $email=$pass['email'];
	  $phone=$_POST['phone'];
	  $diachi=$_POST['diachi'];
	  $sql="update form dangky set email='$email' matkhau='$pass' tenkhachhang='$user' diachinhan='$diachi' dienthoai='$phone' where id=$_GET[id]";
	  $row=mysql_query($sql);
	  }
  ?>