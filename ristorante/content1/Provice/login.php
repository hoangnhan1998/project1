<?php @session_start();?>
  <form class="modal-content" method="post" >
    <div class="container" align="center">
      <label for="uname"><b>Username</b></label>
      <input type="text" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" name="psw" required>
      <button type="submit" name="btnLogin" class="btn btn-primary btn-md" >Đăng nhập</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    
      <button type="button" onclick='document.getElementById('id01').style.display='none'' class="cancelbtn">Cancel</button>
      <button type="button" class="dangky">Đăng ký</button>
      <span class="pasw">Forgot <a href="#">password?</a></span> </div>
  </form>
</div>
  <?php 
 if (isset($_POST['btnLogin'])) {
      $users = $_POST['uname'];
      $password = $_POST['psw'];
	$sql =mysql_query("SELECT * from dangky WHERE email = '$users' AND matkhau = '$password' limit 1");
      $row=mysql_num_rows($sql);
	  if ($row>0) {
    		echo "<script>  alert('load lại lần nữa');
			
			 </script>";
			$user=$_SESSION['email']=$users;
			
	  }}
			?>
            
