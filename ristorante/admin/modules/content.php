 <div class="content">
    	<div class="box_contains">
        	<?php
				if(isset($_GET['quanly'])&&$_GET['ac']){
					$tam=$_GET['quanly'];
					$tam1=$_GET['ac'];
					}else{
						$tam='';
					}if(($tam == 'loaisp')&&($tam1 == 'them')){
						include('modules/quanlyloaisp/them.php');
					}elseif(($tam == 'loaisp')&&($tam1 == 'lietke')){
						
						include('modules/quanlyloaisp/lietke.php');
					}elseif(($tam == 'loaisp')&&($tam1 == 'sua')){
						
						include('modules/quanlyloaisp/sua.php');
					}elseif(($tam == 'hieusp')&&($tam1 == 'them')){
						
						include('modules/quanlyhieusp/them.php');
					}elseif(($tam == 'hieusp')&&($tam1 == 'lietke')){
						
						include('modules/quanlyhieusp/lietke.php');
					}elseif(($tam == 'hieusp')&&($tam1 == 'sua')){
						
						include('modules/quanlyhieusp/sua.php');
					
					}elseif(($tam == 'sanpham')&&($tam1 == 'them')){
						
						include('modules/quanlysanpham/them.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'lietke')){
						
						include('modules/quanlysanpham/lietke.php');
					}elseif(($tam == 'sanpham')&&($tam1 == 'sua')){
						
						include('modules/quanlysanpham/sua.php');
					}elseif(($tam == 'tintuc')&&($tam1 == 'them')){
						
						include('modules/quanlytintuc/them.php');
					}elseif(($tam == 'tintuc')&&($tam1 == 'lietke')){
						
						include('modules/quanlytintuc/lietke.php');
					}elseif(($tam == 'tintuc')&&($tam1 == 'sua')){
						
						include('modules/quanlytintuc/sua.php');
					}else{
						include('modules/quanlysanpham/lietke.php');
					}
			?>
        
        </div>
    </div>
    <div class="clear"></div>