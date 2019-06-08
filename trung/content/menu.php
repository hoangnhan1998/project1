<?php 
session_start();
 if (isset($_POST['btnLogin'])) {
      $users = $_POST['uname'];
      $password = $_POST['psw'];
	$sql =mysql_query("SELECT * from dangky WHERE email = '$users' AND matkhau = '$password' limit 1");
      if ($row=mysql_num_rows($sql)>0) {
    		echo "<script>alert('sai tai khoan or mat khau')</script>";
			$user=$_SESSION['email']=$users;}}
			
			?>

<div id="Welcome" style="position:fixed; width:100%">
  <nav class="navbar"> <a class="navbar-brand" href="#home"> <img src="images/logo.png" width="50" height="50" alt="">Italian Restaurant </a>
    <div class="navbar-collapse" id="navbarText">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="#home">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="?quanly=chitietsp&&#Restaurant">Sản Phẩm</a> </li>
        <li class="nav-item"> <a class="nav-link" href="?quanly=dathang&&#Restaurant">Giỏ Hàng</a> </li>
        <?php $user=""; if(!$user){}else echo"<li class='nav-item'> <a class='nav-link' href='#id01'>
			  <button class='dropdown-btn' onclick='hihi()'>Login</button>
			 
          </a> </li>"; ?>
        <li class="nav-item"> <a class="nav-link" href="#OurLocation">Our Location</a> </li>
      </ul>
    </div>
  </nav>
</div>
<div id="id01" class="modal">
  <form class="modal-content animate" method="post" action="" >
    <div class="container" align="center">
      <label for="uname"><b>Username</b></label>
      <input type="text" name="uname" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" name="psw" required>
      <button type="submit" name="btnLogin" class="btn btn-primary btn-md">Đăng nhập</button>
    </div>
    <div class="container" style="background-color:#f1f1f1">
    
      <button type="button" onclick='document.getElementById('id01').style.display='none'' class="cancelbtn">Cancel</button>
      <button type="button" class="dangky">Đăng ký</button>
      <span class="pasw">Forgot <a href="#">password?</a></span> </div>
  </form>
</div>
<script>
function hihi(){
	var a = document.getElementById('id01').style.display='block';
	}
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script> 
