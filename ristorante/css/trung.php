<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/csss.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/hoang.css">

    	<title>Italian Restaurant</title>
    	<link rel="icon" href="images/logo.png">
	</head>
	<body>
	  	<div id="Welcome" style="position:fixed; width:100%">
	    	<nav class="navbar">
		 		<a class="navbar-brand" href="#home">
    				<img src="images/logo.png" width="50" height="50" alt="">Italian Restaurant
		 		</a>
			  	<div class="navbar-collapse" id="navbarText">
			    	<ul class="navbar-nav">
			      		<li class="nav-item">
			        		<a class="nav-link" href="#home">Home</a>
			      		</li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Restaurant">Sản Phẩm</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#Menu">Giỏ Hàng</a>
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link"><button class="dropdown-btn" onclick="document.getElementById('id01').style.display='block'">Login</button></a>
                           
					    </li>
					    <li class="nav-item">
					    	<a class="nav-link" href="#OurLocation">Our Location</a>
					    </li>
				    </ul>
				</div>
			</nav>
       	</div>
        <div style="clear:both"></div>
        <div class="mainmenu" style="height:680px; width:100%;padding-top:90px" id="home">
							<ul class="nav navbar-nav">
								<li><a href="index.html">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="#">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
                        <div style="clear:both"></div>
			<div class="container" style="height:500px; width:1350px" id="Restaurant">
            	<div class="sidenav">
                 <a href="#about">About</a>
                 <a href="#services">Services</a>
                 <a href="#clients">Clients</a>
                 <a href="#contact">Contact</a>
                 <button class="dropdown-btn">Dropdown 
                  </button>
                <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                 </div>
                  <button class="dropdown-btn"> search
                  </button>
                  <div class="dropdown-container">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
    				<a href="#">Link 3</a>
 			 		</div>
                    </div>

<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
            <div class="col-sm-8"></div>
		</div> 	
        <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" style="width:100px;margin-left:45%">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <button type="button" class="dangky">Đăng ký</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  	</body>
</html>
