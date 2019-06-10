<?php
@session_start();
	$sql_loaisp="select * from sanpham where (sanpham.loaisp='$_GET[id]' and tinhtrang = '1')";
	$num_loaisp=mysql_query($sql_loaisp);
	$count=mysql_num_rows($num_loaisp);
	
?>
<?php
	$sql_tenloaisp="select tenloaisp from loaisp where (idloaisp='$_GET[id]' and tinhtrang = '1') ";
	$row=mysql_query($sql_tenloaisp);
	$dong=mysql_fetch_array($row);
?>
	<div class="tieude"><?php echo $dong['tenloaisp'] ?></div>
                	<ul class="product">
                     <?php
					 if($count>0){
						while($dong_loaisp=mysql_fetch_array($num_loaisp)){
						?>
                    	<li><a href="?quanly=chitietsp&idloaisp=<?php echo $dong_loaisp['loaisp'] ?>&id=<?php echo $dong_loaisp['idsanpham'] ?>#Restaurant">
                       
                        	<img src="admin/modules/quanlysanpham/img/<?php echo $dong_loaisp['hinhanh'] ?>" width="150" height="150" />
                            <p><?php echo $dong_loaisp['tensp'] ?></p>
                            <p><?php echo $dong_loaisp['giadexuat'] ?></p>
                            
                        	<p>Chi tiết</p>
                        </a></li>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </ul>
                
            
            </div>