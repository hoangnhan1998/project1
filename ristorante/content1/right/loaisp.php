<style>
.product div:hover{
	background:#FFFF00;
}
</style>

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
?><div style="width:1100px">
	<div class="tieude" style="width:1100px; float:left; margin:10px 0px"><?php echo $dong['tenloaisp'] ?></div>
                	<div class="product">
                     <?php
					 if($count>0){
						while($dong_loaisp=mysql_fetch_array($num_loaisp)){
						?><div class="sanpham" style="float:left;width:200px;margin:0px 20px 20px 0px;height:250px" align="center">
                        <form action="update_cart.php?id=<?php echo $dong_loaisp['idsanpham'] ?>" method="post">
                    	
                       
                        	<img src="admin/modules/quanlysanpham/img/<?php echo $dong_loaisp['hinhanh'] ?>" width="150" height="150" />
                            <p><?php echo $dong_loaisp['tensp'] ?></p>
                             <input type="text" value="1" name="soluong" style="display:none">
                            <p><?php echo $dong_loaisp['giadexuat'] ?></p>
                            <button type="submit" name="add_to_cart" value="loaisp" >Mua Hàng</button>
                        <!--</a>--></form></div>
                       <?php
						}
	}else{
		echo 'Hiện chưa có sản phẩm...';
	}
					   ?>
                    </div>
            </div>