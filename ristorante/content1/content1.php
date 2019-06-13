<?php
	$sql_loai="select * from loaisp where tinhtrang in ('1') order by idloaisp asc ";
	$row_loai=mysql_query($sql_loai);
	$sql_hieu="select * from hieusp where tinhtrang = '1' order by idhieusp asc";
	$row_hieu=mysql_query($sql_hieu);
?>
               <div class="sidenav" style="float:left; margin-right:20px;width:250px">
                 <a href="#about">About</a>
                 <a href="#services">Services</a>
                 <a href="#clients">Clients</a>
                 <a href="#contact">Contact</a>
                 <button class="dropdown-btn">Loại 
                  </button>
                <div class="dropdown-container">
                <?php
				while($dong_loai=mysql_fetch_array($row_loai)){
				?>
                	
                   <a href="index.php?quanly=loaisp&id=<?php echo $dong_loai['idloaisp'] ?>#Restaurant"><?php echo $dong_loai['tenloaisp'] ?></a>
                  <?php
				}
				  ?>
                 </div>
                  <button class="dropdown-btn"> Hãng
                  </button>
                  <div class="dropdown-container">
                     <?php
				while($dong_hieu=mysql_fetch_array($row_hieu)){
				?>
                	<a href="index.php?quanly=nhanhieusp&id=<?php echo $dong_hieu['idhieusp'] ?>#Restaurant"><?php echo $dong_hieu['tenhieusp'] ?></a>
                  <?php
				}
				  ?>
                  </div>
                    </div>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>