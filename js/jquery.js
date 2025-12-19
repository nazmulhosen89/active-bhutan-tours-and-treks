$("#example3").zAccordion({
	slideWidth: "500px",
	width: "800px",
	height: "200px",
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