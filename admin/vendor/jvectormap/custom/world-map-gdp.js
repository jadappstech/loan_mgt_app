// World Map GDP
$(function(){
	$('#world-map-gdp').vectorMap({
		map: 'world_mill_en',
		zoomOnScroll: false,
		series: {
			regions: [{
				values: gdpData,
				scale: ['#1273eb'],
				normalizeFunction: 'polynomial'
			}]
		},
		backgroundColor: 'transparent',
		onRegionTipShow: function(e, el, code){
			el.php(el.php()+' (GDP - '+gdpData[code]+')');
		}
	});
});