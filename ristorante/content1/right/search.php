<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql_timkiem="select * from sanpham,loaisp,hieusp where sanpham.loaisp=loaisp.idloaisp and sanpham.nhasx=hieusp.idhieusp and sanpham.tensp like '%$search%'";
	$row_timkiem=mysql_query($sql_timkiem);
	$count=mysql_num_rows($row_timkiem);
	if($count>0){
	
?>
<div style="width:980px" >
    <div class="tieude" style="margin:0px 0px 20px 0px"><h2>kết quả tìm kiếm</h2></div>
    <?php
					while($dong_moinhat=mysql_fetch_array($row_timkiem)){
					?>
                    <form action="update_cart.php?id=<?php echo $dong_moinhat['idsanpham'] ?>" method="post">
    <div class="sanpham" style="float:left;width:200px;margin:0px 20px 20px 0px;height:250px" align="center"> <img src="admin/modules/quanlysanpham/img/<?php echo $dong_moinhat['hinhanh'] ?>" width="150" height="150" /><br>
      <span style="color:skyblue"><?php echo $dong_moinhat['tensp'] ?></span><br>
      <input type="text" value="1" name="soluong" style="display:none">
      <span style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['giadexuat']).' '.'VNĐ'?></span><br>
                            <input type="submit" name="add_to_cart" value="mua hang" >
    </div>
    </form>
    <?php
					}
					  ?>
  </div><div style="clear:both"></div>
  <?php
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  ?>