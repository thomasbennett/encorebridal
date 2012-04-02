$j(document).ready(function() {
	// DRESS SIZE
	$j('#search_size_slider').slider({
		range: true,
		max: 24,
		min: 0,
		values: [4, 8],
                step: 2,
		create: function(event, ui) {
			var curSizeVal = $j('#search_size_slider').slider("values");
			$j('#search_size_slider_value').text(curSizeVal[0] + ' - ' + curSizeVal[1]);
		},
		slide: function(event, ui) {
			var curSizeVal = $j('#search_size_slider').slider("values");
			$j('#search_size_slider_value').text(curSizeVal[0] + ' - ' + curSizeVal[1]);
		}
	});

	// HEIGHT
	$j('#search_height_slider').slider({
		range: true,
		max: 77,
		min: 53,
		values: [55, 75],
		slide: function(event, ui) {
			$j("#search_height_slider_value").html(Math.floor(ui.values[0] / 12) + "'" + (ui.values[0] % 12) + '" - ' + Math.floor(ui.values[1] / 12) + "'" + (ui.values[1] % 12) + '"');
            $j("#search_height_min_inches").val(ui.values[0]);
            $j("#search_height_max_inches").val(ui.values[1]);
        }
	});
	$j("#search_height_slider_value").html(Math.floor($j("#search_height_slider").slider("values", 0) / 12) + "'" + ($j("#search_height_slider").slider("values", 0) % 12) + '" - ' + Math.floor($j("#search_height_slider").slider("values", 1) / 12) + "'" + ($j("#search_height_slider").slider("values", 1) % 12) + '"');
    $j("#search_height_min_inches").val($j("#search_height_slider").slider("values", 0));
    $j("#search_height_max_inches").val($j("#search_height_slider").slider("values", 1));

    // COST
	$j('#search_cost_slider').slider({
		range: true,
		max: 20000,
		min: 0,
		step: 1000,
		values: [1000, 3000],
		create: function(event, ui) {
			var curSizeVal = $j('#search_cost_slider').slider("values");
			$j('#search_cost_slider_value').text('$' + digits(curSizeVal[0]) + ' - $' + digits(curSizeVal[1]));
		},
		slide: function(event, ui) {
			var curSizeVal = $j('#search_cost_slider').slider("values");
			$j('#search_cost_slider_value').text('$' + digits(curSizeVal[0]) + ' - $' + digits(curSizeVal[1]));
		}
	});


    $j('#submit_quick_search').click(function(){
        var curSizeVal = $j('#search_size_slider').slider("values");
        var curHeightVal = $j('#search_height_slider').slider("values");
        var curCostVal = $j('#search_cost_slider').slider("values");

        $j('#quick_search_form').append("<input type='hidden' name='min_size' value='"+curSizeVal[0]+"'/>");
        $j('#quick_search_form').append("<input type='hidden' name='max_size' value='"+curSizeVal[1]+"'/>");
        $j('#quick_search_form').append("<input type='hidden' name='min_height' value='"+curHeightVal[0]+"'/>");
        $j('#quick_search_form').append("<input type='hidden' name='max_height' value='"+curHeightVal[1]+"'/>");
        $j('#quick_search_form').append("<input type='hidden' name='min_cost' value='"+curCostVal[0]+"'/>");
        $j('#quick_search_form').append("<input type='hidden' name='max_cost' value='"+curCostVal[1]+"'/>");
        $j('#quick_search_form').append("<input type='hidden' name='q' value='search_by_advanced_parameters'/>");
        
    })
});

function digits(money) {
	money += '';
    return money.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"); 
}

