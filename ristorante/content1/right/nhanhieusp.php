<?php
	$sql_loaisp="select  * from sanpham where (sanpham.nhasx='$_GET[id]' and tinhtrang = '1')";
	$num_loaisp=mysql_query($sql_loaisp);
	$count=mysql_num_rows($num_loaisp);
	
?>
<?php
	$sql_tenloaisp="select tenhieusp from hieusp where (idhieusp='$_GET[id]' and tinhtrang = '1') ";
	$row=mysql_query($sql_tenloaisp);
	$dong=mysql_fetch_array($row);
?><div style="width:1100px">
	<div class="tieude"><?php echo $dong['tenhieusp'] ?></div>
                	<div class="product">
                     <?php
					 if($count>0){
						while($dong_loaisp=mysql_fetch_array($num_loaisp)){
						?>
                    	<div class="sanpham" style="float:left;width:200px;margin:0px 20px 20px 0px;height:250px" align="center"><!--<a href="?quanly=chitietsp&idhieusp=<?php echo $dong_loaisp['loaisp'] ?>&id=<?php echo $dong_loaisp['idsanpham'] ?>">-->
                       
                        	<img src="admin/modules/quanlysanpham/img/<?php echo $dong_loaisp['hinhanh'] ?>" width="150" height="150" />
                            <p><?php echo $dong_loaisp['tensp'] ?></p>
                            <p><?php echo $dong_loaisp['giadexuat'] ?></p>
                            
                        	<p>Chi tiết</p>
                        <!--</a>--></div>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </div></div>