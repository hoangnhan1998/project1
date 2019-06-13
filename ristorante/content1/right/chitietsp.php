
<div class="content2" style="width:980px; float:left">
  <?php
	$sql_moinhat="select * from sanpham where tinhtrang in ('1') order by idsanpham desc limit 0,6";
	$row_moinhat=mysql_query($sql_moinhat);
	
?>
  <div style="width:1100px">
    <div class="tieude" style="margin:0px 0px 20px 0px">Sản phẩm mới nhất</div>
    <?php
					while($dong_moinhat=mysql_fetch_array($row_moinhat)){
					?>
                    <form action="update_cart.php?id=<?php echo $dong_moinhat['idsanpham'] ?>" method="post">
    <div class="sanpham" style="float:left;width:200px;margin:0px 20px 20px 0px;height:250px" align="center"> <img src="admin/modules/quanlysanpham/img/<?php echo $dong_moinhat['hinhanh'] ?>" width="150" height="150" />
      <p style="color:skyblue"><?php echo $dong_moinhat['tensp'] ?></p>
      <input type="text" value="1" name="soluong" style="display:none">
      <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-bottom:5px;"><?php echo number_format($dong_moinhat['giadexuat']).' '.'VNĐ'?></p>
                            <input type="submit" name="add_to_cart" value="mua hang" >
    </div>
    </form>
    <?php
					}
					  ?>
  </div><div style="clear:both"></div>
  <div style="width:980px">
    <?php
 	$sql_loai=mysql_query("select * from loaisp where tinhtrang='1'");
	
	while($dong_loai=mysql_fetch_array($sql_loai)){?>
    <div class="tieude" style="margin:0px 0px 20px 0px"><?php echo $dong_loai['tenloaisp'] ?></div> <div style="clear:both"></div>
    <?php
 	$sql_loaisp="select * from loaisp inner join sanpham on sanpham.loaisp=loaisp.idloaisp where (sanpham.loaisp=loaisp.tenloaisp)";
	$row=mysql_query($sql_loaisp);
	$count=mysql_num_rows($row);
	if($count>0){
			
			while($dong=mysql_fetch_array($row)){
					
 				?>
    <form action="update_cart.php?id=<?php echo $dong['idsanpham'] ?>" method="post">
      <div class="sanpham" style="float:left;width:200px;margin:0px 20px 20px 0px;height:250px" align="center"> <img src="admin/modules/quanlysanpham/img/<?php echo $dong['hinhanh'] ?>" width="150" height="150" />
        <p style="color:skyblue"><?php echo $dong['tensp']?></p>
        <p style="color:red;font-weight:bold; border:1px solid #d9d9d9; width:150px;
                            height:30px; line-height:30px;margin-bottom:5px;"><?php echo number_format($dong['giadexuat']).' '.'VNĐ' ?></p>
        <input type="submit" name="add_to_cart" value="mua hang" >
        
      </div>
    </form>
    <?php
			}?>
    <?php
	}else{?>
    <div class="sanpham" style="float:left;width:200px">
      <?php
		echo '<h3 style="margin:5px;font-style:italic;color:#000">Hiện chưa có sản phẩm...</h3>';
	}
	?> 
	<?php }
						?>
    </div>
  </div>
</div>
