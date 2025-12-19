<!DOCTYPE html>
<html lang="en-US">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<style type="text/css">
			* {margin:0;padding:0;font-family:Arial, Verdana, sans-serif;}
		small {font-size:11px;margin:10px 0;color:#333;}
			#container {width:998px;margin:0 auto;}
			pre {font-family:"Courier New", Courier, monospace;font-size:11px;margin:20px 0 100px 0;border:1px dashed #ddd;padding:10px;background:#f6f6f6;}
/*			pre.html {margin:10px 0;}
*/			.clear {clear:both;}
		</style>
		<script type="text/javascript">
			$(document).ready(function() {
				$("pre.js").each(function(index) {
					eval($(this).text());
				});
			});
		</script>
	</head>
	<body>
	<div class="banner">

		<div id="container">

			<style type="text/css">
				#thumbs {list-style:none;float:left;}
				#thumbs li {display:inline;}
				#thumbs a {margin-left:5px;float:left;}
				#start {display:none;float:left;}
				#stop {float:left;}
			</style>
			<ul id="example3">
				<li><a href="?action=kulturtour"><img src="../images/banner/g-cultural.jpg"/></a></li>
				<li><a href="?action=trekkingstyle"><img src="../images/banner/g-trekking.jpg"/></a></li>
				<li><a href="?action=festivaltour"><img src="../images/banner/g-festival.jpg"/></a></li>
				<li><a href="?action=specialtour"><img src="../images/banner/g-homestay.jpg"/></a></li>
				<li><a href="?action=specialtour"><img src="../images/banner/g-bird.jpg"/></a></li>
				<li><a href="?action=specialtour"><img src="../images/banner/g-weeding.jpg"/></a></li>
				<li><a href="?action=specialtour"><img src="../images/banner/g-adventure.jpg"/></a></li>
			</ul>



<pre class="js" style="visibility:hidden">
$("#example3").zAccordion({
	slideWidth: "520px",
	width: "998px",
	height: "298px",
	timeout: 2000
});
$("#start").click(function() {
	$("#example3").zAccordion("start");
	$(this).css("display", "none");
	$("#stop").css("display", "block");
	return false;
});
$("#stop").click(function() {
	$("#example3").zAccordion("stop");
	$(this).css("display", "none");
	$("#start").css("display", "block");
	return false;
});
$("#thumbs a").click(function() {
	$("#example3").zAccordion("trigger", $(this).parent().index());
	return false;
});
</pre>
</div></div>	</body>
</html>