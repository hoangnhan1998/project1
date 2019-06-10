
<div id="Welcome" style="position:fixed; width:100%">
  <nav class="navbar"> <a class="navbar-brand" href="#home" >Italian Restaurant </a>
    <div class="navbar-collapse" id="navbarText">
      <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="#home">Home</a> </li>
        <li class="nav-item"> <a class="nav-link" href="?quanly=chitietsp&&#Restaurant" >Sản Phẩm</a> </li>
        <li class="nav-item"> <a class="nav-link" href="?quanly=dathang&&#Restaurant" >Giỏ Hàng</a> </li>
        <?php if(!empty($_SESSION['email'])) { 
        echo"<li class='nav-item'> <a class='nav-link' href='?quanly=logout'>Đăng Xuất</a> </li>
			<li class='nav-item'> <a class='nav-link' href='?quanly=sua&&#Restaurant' >Provie</a> </li>
			";}
        else echo"<li class='nav-item'> <a class='nav-link' href='?quanly=login#Restaurant'>Đăng Nhập</a> </li>";?>
        <li class="nav-item"> <a class="nav-link" href="#OurLocation" >Our Location</a> </li>
      </ul>
    </div>
  </nav>
</div>
