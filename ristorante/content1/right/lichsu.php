<?php if($_SESSION['email']);
	$us=$_SESSION['email'];
	$sql ="select *from cart, cart_detail, sanpham where fullname='$us' and cart.id=cart_detail.cart_id and sanpham.idsanpham=cart_detail.product_id";
	$row=mysql_query($sql);
	$count=mysql_num_rows($row);
	if($count>0){
	?>
    <table border="1">
    <tr>
    <td>ID</td>
    <td>Tên sản phẩm</td>
    <td>Mã sp</td>
    <td>Hình ảnh</td>
    <td>Giá</td>
    <td>Số lượng</td>
    <td>Ngày Mua</td>
  </tr>
	
    <?php
					while($dong=mysql_fetch_array($row)){
					?>
              <tr>
                <td><?php  echo $dong['idsanpham']?></td>
                <td><?php echo $dong['tensp'] ?></td>
                <td><?php echo $dong['masp'] ?></td>
                <td><img src="admin/modules/quanlysanpham/img/<?php echo $dong['hinhanh'] ?>" width="80" height="80" /></td>
                <td><?php echo $dong['price'] ?></td>
                <td><?php echo $dong['quantity'] ?></td>
                <td><?php echo $dong['createdate'] ?></td> </tr> 
               <?php } ?>
               </table>
  <?php
	}else{
	  echo 'Bạn Chưa mua sản phẩm nào';
  }
  ?>