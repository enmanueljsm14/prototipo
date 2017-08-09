 jQuery(document).ready(function () {
        jQuery('#world-map-markers').vectorMap({
        map: 'world_mill_en',
	    normalizeFunction: 'polynomial',
        hoverOpacity: 1,
        hoverColor: false,
        backgroundColor: 'white',
        regionStyle: {
            initial: {
                fill: 'teal',
                "fill-opacity": 1,
                stroke: 'none',
                "stroke-width": 0,
                "stroke-opacity": 1
            },
            hover: {
				 fill: 'blue',
                "fill-opacity": 1,
                cursor: 'pointer'
            },
            selected: {
				backgroundColor: 'red',
                fill: 'red'
            },
            selectedHover: {}
        },
          onRegionClick: function (element, code, region) {
          

            if(code=="modalcompost"){
				
				$('#compost').modal('show')
			}
          }
			
        });
      });