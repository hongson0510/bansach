<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trang chủ</title>
<link rel="stylesheet" type="text/css" href="CSS/Style.css">
<link rel="stylesheet" type="text/css" href="CSS/Menu.css">
<link rel="stylesheet" type="text/css" href="CSS/Sanpham.css">
<link rel="stylesheet" type="text/css" href="CSS/Cart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--nhúng file css và js của Slide show-->
<link rel="stylesheet" type="text/css" href="CSS/SlideShow.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5A6gIH4Zf0lHI9IBCEvLtsRVSrNtYpzU"></script>
<script src="JS/SlideShow.js"></script>
</head>

<body>
<div id="wrapper">
	<?php include("ViewsHome/inc_Header.php"); ?>
    <?php include("ViewsHome/inc_Menu.php"); ?>
	
    <div id="content" class="clear_fix">
    	<?php include("ViewsHome/inc_Left.php"); ?>
		<?php 
			//hiển thị phần nội dung giữa của trang web
            $module = "";
            if(isset($_REQUEST["module"]))
                $module = $_REQUEST["module"];
            if($module=="tintuc")
            {
                require("ControllersHome/ctlTintuc.php");
            }
            else if($module=="sanpham")
            {
                require("ControllersHome/ctlSanpham.php");
            }
            else if($module=="chitietsanpham")
            {
                require("ControllersHome/ctlChitietSanpham.php");
            }
            else if($module=="cart")
            {
                require("ControllersHome/ctlCart.php");
            }
			else if($module=="checkout")
            {
                require("ControllersHome/ctlCheckout.php");
            }
            else
            {
                require("ControllersHome/ctlHome.php");
            }
        ?>
        <?php 
			 if($module!="cart" && $module!="chitietsanpham")
			 {
				 include("ViewsHome/inc_Right.php");
			 }
		?>



    
    </div> <!--id="content" -->

    <div id="map" style="height: 200px;">
        <script>
  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 21.04642650385266, lng: 105.7849539741651},
        zoom: 13
    });
    var marker = new google.maps.Marker({
      position: {lat: 21.04642650385266, lng: 105.7849539741651},
      map: map,
      title: 'Hà Nội'
    });
  }
  initMap();
</script>

        </div>


    <div id="footer"> 
    	Lê Hồng Sơn
        <br>Di động: 88888888<br>Email: son@gmail.com


     </div>

</div>
</body>
</html>
