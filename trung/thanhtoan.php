<?php
	@session_start();

	if(isset($_POST['ok'])){
		$name=$_SESSION['email'];	
		$insert_cart="insert into cart (fullname) values ('$name')";
		$ketqua=mysql_query($insert_cart);
		if($ketqua){?>
			<?php for($i=0;$i<count($_SESSION['product']);$i++) {
				echo"<script>console.log('$cart_detail');</script>";
			$max=mysql_query("select max(id) from cart");
			$row=mysql_fetch_array($max);
			
			$cart_id=$row[0];
			$product_id=$_SESSION['product'][$i]['id'];
			$quantity=$_SESSION['product'][$i]['soluong'];
			
			$price=$_SESSION['product'][$i]['gia'];
			
			 $insert_cart_detail="insert into cart_detail (cart_id,product_id,quantity,price) values('$cart_id','$product_id','$quantity','$price');";
			 $cart_detail=mysql_query($insert_cart_detail);
		}
	}	
	header('location:index.php?quanly=camon&&#Restaurant');
	unset($_SESSION['product']);
	}
?>