$(document).ready(function() {
	// DRESS SIZE
	$('#search_size_slider').slider({
		range: true,
		max: 24,
		min: 0,
		values: [4, 8],
		create: function(event, ui) {
			var curSizeVal = $('#search_size_slider').slider("values");
			$('#search_size_slider_value').text(curSizeVal[0] + ' - ' + curSizeVal[1]);
		},
		slide: function(event, ui) {
			var curSizeVal = $('#search_size_slider').slider("values");
			$('#search_size_slider_value').text(curSizeVal[0] + ' - ' + curSizeVal[1]);
		}
	});

	// HEIGHT
	$('#search_height_slider').slider({
		range: true,
		max: 109,
		min: 71,
		values: [75, 100],
		slide: function(event, ui) {
			$("#search_height_slider_value").html(Math.floor(ui.values[0] / 12) + "'" + (ui.values[0] % 12) + '" - ' + Math.floor(ui.values[1] / 12) + "'" + (ui.values[1] % 12) + '"');
            $("#search_height_min_inches").val(ui.values[0]);
            $("#search_height_max_inches").val(ui.values[1]); 
        }
	});
	$("#search_height_slider_value").html(Math.floor($("#search_height_slider").slider("values", 0) / 12) + "'" + ($("#search_height_slider").slider("values", 0) % 12) + '" - ' + Math.floor($("#search_height_slider").slider("values", 1) / 12) + "'" + ($("#search_height_slider").slider("values", 1) % 12) + '"');
    $("#search_height_min_inches").val($("#search_height_slider").slider("values", 0));
    $("#search_height_max_inches").val($("#search_height_slider").slider("values", 1)); 

    // COST
	$('#search_cost_slider').slider({
		range: true,
		max: 20000,
		min: 0,
		step: 1000,
		values: [1000, 3000],
		create: function(event, ui) {
			var curSizeVal = $('#search_cost_slider').slider("values");
			$('#search_cost_slider_value').text('$' + digits(curSizeVal[0]) + ' - $' + digits(curSizeVal[1]));
		},
		slide: function(event, ui) {
			var curSizeVal = $('#search_cost_slider').slider("values");
			$('#search_cost_slider_value').text('$' + digits(curSizeVal[0]) + ' - $' + digits(curSizeVal[1]));
		}
	});
});

function digits(money) {
	money += '';
    return money.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"); 
}

