<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome To Active Bhutan Tours & Treks</title>
<link href="style/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.zaccordion.min.js"></script>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />

</head>

<body>
<?php
include 'header.php';
?>
<div class="mainback">
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
else if($action=="aboutus")
{
	include 'aboutus.php';	
	include 'bottom_2.php';
}
else if($action=="whywithus")
{
	include 'whywithus.php';	
	include 'bottom_2.php';
}
else if($action=="clientsays")
{
	include 'clientsays.php';	
	include 'bottom_2.php';
}
else if($action=="aboutbhutan")
{
	include 'aboutbhutan.php';	
	include 'bottom_2.php';
}
else if($action=="drivingdistance")
{
	include 'drivingdistance.php';	
	include 'bottom_2.php';
}
else if($action=="temperatures")
{
	include 'temperatures.php';	
	include 'bottom_2.php';
}
else if($action=="festivaldates")
{
	include 'festivaldates.php';	
	include 'bottom_2.php';
}
else if($action=="flightschedule")
{
	include 'flightschedule.php';	
	include 'bottom_2.php';
}
else if($action=="importantlinks")
{
	include 'importantlinks.php';	
	include 'bottom_2.php';
}
else if($action=="artsandcrafts")
{
	include 'artsandcrafts.php';	
	include 'bottom_2.php';
}
else if($action=="cultureandtrad")
{
	include 'cultureandtrad.php';	
	include 'bottom_2.php';
}
else if($action=="economy")
{
	include 'economy.php';	
	include 'bottom_2.php';
}
else if($action=="environment")
{
	include 'environment.php';	
	include 'bottom_2.php';
}
else if($action=="floraandfauna")
{
	include 'floraandfauna.php';	
	include 'bottom_2.php';
}
else if($action=="language")
{
	include 'language.php';	
	include 'bottom_2.php';
}
else if($action=="nationalhappiness")
{
	include 'nationalhappiness.php';	
	include 'bottom_2.php';
}
else if($action=="location")
{
	include 'location.php';	
	include 'bottom_2.php';
}
else if($action=="people")
{
	include 'people.php';	
	include 'bottom_2.php';
}
else if($action=="politicalsystem")
{
	include 'politicalsystem.php';	
	include 'bottom_2.php';
}
else if($action=="nationalsymbols")
{
	include 'nationalsymbols.php';	
	include 'bottom_2.php';
}
else if($action=="productdetails")
{
	include 'product_details.php';	
	include 'bottom_2.php';
}
else if($action=="contactus")
{
	include 'contactus.php';	
	include 'bottom_2.php';
}
else if($action=="traveltips")
{
	include 'traveltips.php';	
	include 'bottom_2.php';
}
else if($action=="gettingtobhutan")
{
	include 'gettingtobhutan.php';	
	include 'bottom_2.php';
}
else if($action=="gettingaround")
{
	include 'gettingaround.php';	
	include 'bottom_2.php';
}
else if($action=="travelrequirement")
{
	include 'travelrequirement.php';	
	include 'bottom_2.php';
}

else if($action=="glimpse")
{
	include 'glimpse.php';	
	include 'product_bottom.php';
}
else if($action=="steptobhutab")
{
	include 'steptobhutab.php';	
	include 'product_bottom.php';
}
else if($action=="lovelybhutan")
{
	include 'lovelybhutan.php';	
	include 'product_bottom.php';
}
else if($action=="centralbhutan")
{
	include 'centralbhutan.php';	
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

else if($action=="paradisejourney")
{
	include 'paradisejourney.php';	
	include 'product_bottom.php';
}
else if($action=="greenbhutan")
{
	include 'greenbhutan.php';	
	include 'product_bottom.php';
}
else if($action=="himalayankingdom")
{
	include 'himalayankingdom.php';	
	include 'product_bottom.php';
}
else if($action=="journeytobhutan")
{
	include 'journeytobhutan.php';	
	include 'product_bottom.php';
}
else if($action=="hiddenhimalayan")
{
	include 'hiddenhimalayan.php';	
	include 'product_bottom.php';
}
else if($action=="ferwestbhutan")
{
	include 'ferwestbhutan.php';	
	include 'product_bottom.php';
}
else if($action=="fareastbhutan")
{
	include 'fareastbhutan.php';	
	include 'product_bottom.php';
}
else if($action=="beautifuljumolharitrek")
{
	include 'beautifuljumolharitrek.php';	
	include 'product_bottom.php';
}
else if($action=="cultureandtrad")
{
	include 'cultureandtrad.php';	
	include 'product_bottom.php';
}
else if($action=="snowmantrek")
{
	include 'snowmantrek.php';	
	include 'product_bottom.php';
}
else if($action=="wonderfullayagasatrek")
{
	include 'wonderfullayagasatrek.php';	
	include 'product_bottom.php';
}
else if($action=="samtengangwintertrek")
{
	include 'samtengangwintertrek.php';	
	include 'product_bottom.php';
}
else if($action=="dptreks")
{
	include 'dptreks.php';	
	include 'product_bottom.php';
}
else if($action=="bumthhangculturaltrek")
{
	include 'bumthhangculturaltrek.php';	
	include 'product_bottom.php';
}
else if($action=="mixedtourincludetrekcultureandfestival")
{
	include 'mixedtourincludetrekcultureandfestival.php';	
	include 'product_bottom.php';
}
else if($action=="textiletour")
{
	include 'textiletour.php';	
	include 'product_bottom.php';
}
else if($action=="producttour")
{
	include 'product_tour.php';	
	include 'product_bottom.php';
}
else if($action=="producttreks")
{
	include 'product_treks.php';	
	include 'product_bottom.php';
}
else if($action=="productsptour")
{
	include 'product_sptour.php';	
	include 'product_bottom.php';
}
else if($action=="birtdwatchinginbhutan")
{
	include 'birtdwatchinginbhutan.php';	
	include 'product_bottom.php';
}
else if($action=="mountainbiking")
{
	include 'mountainbiking.php';	
	include 'product_bottom.php';
}
else if($action=="eduationaltour")
{
	include 'eduationaltour.php';	
	include 'product_bottom.php';
}
else if($action=="raftingandkayaking")
{
	include 'raftingandkayaking.php';	
	include 'product_bottom.php';
}
else if($action=="homestay")
{
	include 'homestay.php';	
	include 'product_bottom.php';
}
else if($action=="#")
{
	include '#.php';	
	include 'product_bottom.php';
}
else if($action=="#")
{
	include '#.php';	
	include 'product_bottom.php';
}
else if($action=="#")
{
	include '#.php';	
	include 'product_bottom.php';
}
else if($action=="#")
{
	include '#.php';	
	include 'product_bottom.php';
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
