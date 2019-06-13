 <div class="content2" style="width:980px;float:left" >
    <?php 		
				@session_start();
				include('content1/right/config.php');
				if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
					$conten= $_GET['quanly'];
				}else{
					$conten ='';
				}
				if($conten == 'chitietsp'){
					include('content1/right/chitietsp.php');
				}elseif($conten == 'dangkymoi'){
					include('content1/Provice/dangky.php');
				}elseif($conten == 'loaisp'){
					include('content1/right/loaisp.php');
				}elseif($conten == 'dathang'){
					include('content1/right/dathang.php');
				}
				elseif ($conten == 'login'){
					include('content1/Provice/login.php');
				}
				elseif ($conten == 'logout'){
					include('content1/Provice/logout.php');
				}
				elseif ($conten == 'camon'){
					include('content1/right/camon.php');
				}
				elseif ($conten == 'nhanhieusp'){
					include('content1/right/nhanhieusp.php');
				}elseif ($conten == 'sua'){
					include('content1/Provice/provie.php');
				}elseif ($conten == 'search'){
					include('content1/right/search.php');
				}elseif ($conten == 'lichsu'){
					include('content1/right/lichsu.php');
				}
				
			?>
  </div>