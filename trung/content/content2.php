
<?php
				if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
					$conten= $_GET['quanly'];
				}else{
					$conten ='';
				}if($conten == 'chitietsp'){
					include('content/right/chitietsp.php');
				}elseif($conten == 'loaisp'){
					include('content/right/loaisp.php');
				}elseif($conten == 'dathang'){
					include('content/right/dathang.php');
				}elseif($conten == 'dangkymoi'){
					include('content/right/dangky.php');
				}elseif($conten == 'dangnhap'){
					include('content/right/dangnhap.php');
				}
			?>