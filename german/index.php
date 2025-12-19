<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Active Bhutan Tours & Treks</title>
<link href="../style/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery.zaccordion.min.js"></script>
<link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
<script src="path/to/js/jquery.js"></script>
<script type="text/javascript">
$(function() {
	$(window).scroll(function() {
		if($(this).scrollTop() != 0) {
			$('#toTop').fadeIn();	
		} else {
			$('#toTop').fadeOut();
		}
	});
 
	$('#toTop').click(function() {
		$('body,html').animate({scrollTop:0},800);
	});	
});
</script>
</head>

<body>
<?php
include 'header.php';
?>
<div class="mainback">
<div id="toTop">^ Back to Top</div>

<?php

$action = isset($_GET['action']) ? $_GET['action'] : '';

if($action=="home")
{
include 'banner.php';
include 'content_1.php';
include 'product.php';
include 'bottom_1.php';
include 'bottom_2.php';
}
else if($action=="warrumactivebhutan")
{
	include 'activebhutan.php';	
	include 'bottom_2.php';
}
else if($action=="speziellethemenreisen")
{
	include 'speziellethemenreisen.php';	
	include 'bottom_2.php';
}
else if($action=="unsereempfehlungen")
{
	include 'unsereempfehlungen.php';	
	include 'bottom_2.php';
}
else if($action=="visa")
{
	include 'visa.php';	
	include 'bottom_2.php';
}
else if($action=="ihrepersonliche")
{
	include 'ihrepersonliche.php';	
	include 'bottom_2.php';
}
else if($action=="wahrung")
{
	include 'wahrung.php';	
	include 'bottom_2.php';
}
else if($action=="transportmittel")
{
	include 'transportmittel.php';	
	include 'bottom_2.php';
}
else if($action=="diereligion")
{
	include 'diereligion.php';	
	include 'bottom_2.php';
}
else if($action=="testimonials")
{
	include 'testimonials.php';	
	include 'bottom_2.php';
}
else if($action=="diemonarchi")
{
	include 'diemonarchi.php';	
	include 'bottom_2.php';
}
else if($action=="floraandfauna")
{
	include 'floraandfauna.php';	
	include 'bottom_2.php';
}
else if($action=="uberuns")
{
	include 'uberuns.php';	
	include 'bottom_2.php';
}
else if($action=="importantlinks")
{
	include 'importantlinks.php';	
	include 'bottom_2.php';
}
else if($action=="festivaltour")
{
	include 'festivaltour.php';	
	include 'bottom_2.php';
}
else if($action=="festivaldates")
{
	include 'festivaldates.php';	
	include 'bottom_2.php';
}
else if($action=="tourstyle")
{
	include 'tour_style.php';	
	include 'bottom_2.php';
}
else if($action=="trekkingstyle")
{
	include 'trekking_style.php';	
	include 'bottom_2.php';
}
else if($action=="specialtour")
{
	include 'specialtour.php';	
	include 'bottom_2.php';
}
else if($action=="westlichentalerbhutan")
{
	include 'westlichentalerbhutan.php';	
	include 'bottom_2.php';
}
else if($action=="ausflug")
{
	include 'ausflug.php';	
	include 'bottom_2.php';
}
else if($action=="trongsa_g")
{
	include 'trongsa_g.php';	
	include 'bottom_2.php';
}
else if($action=="zentralbhutan")
{
	include 'zentralbhutan.php';	
	include 'bottom_2.php';
}
else if($action=="reisedurchbhutan")
{
	include 'reisedurchbhutan.php';	
	include 'bottom_2.php';
}

else if($action=="kulturtour")
{
	include 'besichtigungsreise.php';	
	include 'bottom_2.php';
}
else if($action=="ourfacilities")
{
	include 'ourfacilities.php';	
	include 'bottom_2.php';
}
else if($action=="bumthangkulturtrek")
{
	include 'bumthangkulturtrek.php';	
	include 'product_bottom.php';
}
else if($action=="drukpathtrek")
{
	include 'drukpathtrek.php';	
	include 'product_bottom.php';
}
else if($action=="samtengangwintertrek")
{
	include 'samtengangwintertrek.php';	
	include 'product_bottom.php';
}
else if($action=="nabjitrail")
{
	include 'nabjitrail.php';	
	include 'product_bottom.php';
}
else if($action=="reisennachbhutan")
{
	include 'reisennachbhutan.php';	
	include 'bottom_2.php';
}
else if($action=="yaktshatrek")
{
	include 'yaktshatrek.php';	
	include 'product_bottom.php';
}
else if($action=="layagasatrek")
{
	include 'layagasatrek.php';	
	include 'product_bottom.php';
}
else if($action=="snowmantrek")
{
	include 'snowmantrek.php';	
	include 'product_bottom.php';
}
else if($action=="photogallery")
{
	include 'photogallery.php';	
	include 'bottom_2.php';
}
else if($action=="photogalleryart")
{
	include 'photogalleryart.php';	
	include 'bottom_2.php';
}
else if($action=="photogalleryfauna")
{
	include 'photogalleryfauna.php';	
	include 'bottom_2.php';
}
else if($action=="photogalleryfestival")
{
	include 'photogalleryfestival.php';	
	include 'bottom_2.php';
}
else if($action=="photogalleryidentity")
{
	include 'photogalleryidentity.php';	
	include 'bottom_2.php';
}
else if($action=="photogallerylandscape")
{
	include 'photogallerylandscape.php';	
	include 'bottom_2.php';
}
else if($action=="photogallerypeople")
{
	include 'photogallerypeople.php';	
	include 'bottom_2.php';
}
else if($action=="photogalleryrecreation")
{
	include 'photogalleryrecreation.php';	
	include 'bottom_2.php';
}
else if($action=="photogalleryhimalaya")
{
	include 'photogalleryhimalaya.php';	
	include 'bottom_2.php';
}
else if($action=="request_detail")
{
include 'detailed_ltinerary.php';
	include 'product_bottom.php';
//include 'rightphoto.php';
}


else
{
include 'banner.php';
include 'content_1.php';
include 'product.php';
include 'bottom_1.php';
include 'bottom_2.php';
}
?>

</div>
<?php
include 'footer.php';
?>

</body>
</html>
