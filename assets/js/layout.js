$(document).ready(function() {
	
	$("#kisah").hide();
	$("#jurnal").hide();
	$("#dashboard").show();
	
	$("#dashboard-link").click(function() {
		$("#kisah").fadeOut(400, function() {
			$("#jurnal").fadeOut(400, function() {
				$("#dashboard").fadeIn();
			});
		});
	});
	
	$("#kisah-link").click(function() {
		$("#dashboard").fadeOut(400, function() {
			$("#jurnal").fadeOut(400, function() {
				$("#kisah").fadeIn();
			});
		});
	});
	
	$("#jurnal-link").click(function() {
		$("#dashboard").fadeOut(400, function() {
			$("#kisah").fadeOut(400, function() {
				$("#jurnal").fadeIn();
			});
		});
	});
});