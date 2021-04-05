
		<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
		
		
		<script type="text/javascript">
		
 		  	google.charts.load('current', {packages: ['corechart']});
 
 	      google.charts.setOnLoadCallback( function() {
	  			
			 // MSC chart
			 generateChart(
			  	[
				  ['Corporate marketing', 36],
				  ['Digital marketing', 36],
				  ['Consumer marketing', 36],
				  ['Data driven marketing', 36],
				  ['Marketing Research', 36],
				  ['Marketing Communication', 36]
			  	],
				'MSCchart',
				100
			 )
			  
			 // BBA chart
			 generateChart(
			  	[
				  ['Marketing', 330],
				  ['Management', 264], 
				  ['Computer Science', 264], 
				  ['Math, Stats & Logistics', 165], 
				  ['Accounting, Finance & Economics', 66 + 99], 					 
				  ['Entrepreurship', 66] 
			  	],
				'BBAchart',
				-15
			 ) 
			  
			  // Marketing internship
			 generateChart(
				 [
					 ['Audience targeting', 1],
					 ['Event planning', 1],
					 ['Social media campaigns', 1],
					 ['Advertising campaigns', 1],
					 ['Re-branding', 1],
				 ],
				 'markChart',
				 0
			 )

			 // IT job
			 generateChart( 
			  	[
				  ['Customer service', 30],
				  ['Software & Hardware Repairs', 30],
				  ['Web design', 5],
				  ['Audio-visual set-ups', 30],
				  ['Video editing', 5],
				  ['Inventory management', 30]
			  	],
				'itchart',
				-10
			 )
				
			 // Brewery project
			 generateChart(
			  	[
				  ['Research design', 1],
				  ['Data collection', 1],
				  ['Data Analysis ( SPSS )', 1],
				  [' Research presentation', 1],		 		 
			  	],
				'brewcompproj',
				0
			 )
			  
			 // golf project chart
			 generateChart(
				  [ 
					  ['Industry analysis', 1],
					  ['Audience targeting', 1],
					  ['Branding analysis', 1],
					  ['Customer satisfaction assessment', 1]
				  ],
				  'golfcompproj',
				  0
			 )
			 
			 // Hubspot chart
			 generateChart(
				  [ 
					  ['Social media', 1],
					  ['Content analysis', 1],
					  ['Content creation', 1],
					  ['Campaign analysis', 1]
				  ],
				  'hubChart',
				  0
			 )
			 
			 // PartyWizz chart
			 generateChart(
				  [ 
					  [ 'Market Analysis', 1 ],
					  [ 'Content Creation', 1 ],
					  [ 'Email marketing', 1 ],
					  [ 'SEO optimisation', 1 ],
					  [ 'Funnel implmentations', 1 ]
				  ],
				  'partyWizzChart',
				  0
			 )
			 
 	   });
		
		
		
		  
		  function generateChart(elements, id, angle){
		  		
 	         // Define the chart to be drawn.
 	         var data = new google.visualization.DataTable();
 	         data.addColumn('string', 'Element');
 			 // data.addColumn({type:'string', role:'annotation'});
 	         data.addColumn('number', 'Hours');
			 
 	         data.addRows(  elements );
			 
			 if ( $(window).width() >= 992 ){
			 	
				 var pxheight = 250;
				 var pxwidth = 500;
				
				 var prwidth = '80%';
				 var prheight = '100%'; 
				 
				 var fontsize = 16;
				
			 }
			 if ( $(window).width() >= 768 && $(window).width() <= 992){
			 	
				 var pxheight = 180;
				 var pxwidth = 300;
				
				 var prwidth = '80%';
				 var prheight = '100%'; 
				 
				 var fontsize = 12;
				
				
			 }
			 // add the missing div size
			 else{
				 
				 var pxheight = 200;
				 var pxwidth = 200;
				 
				 var prwidth = '100%';
				 var prheight = '65%'; 
			 	
				 var fontsize = 10;
			 }
			 
 			 var options = {
 				 backgroundColor: 'none',
 				 chartArea: {width: prwidth,height: prheight},
 				 tooltip: {trigger: 'none'},
 				 height: pxheight,
 				 width: pxwidth,
  				 legend: {
 						position: 'labeled',
 						labeledValueText: 'none',
 				 		textStyle: {color: 'black', fontSize: fontsize, align: 'center'}
 				 },
 				 pieSliceText: 'none',
   			 pieHole: 0.4,
 				 colors: ['#95b3d7', '#b9cde5', '#dce6f2'],
				 pieStartAngle: angle
 			 };

 	         // Instantiate and draw the chart. 
 	         var chart = new google.visualization.PieChart( document.getElementById( id ) );
 	       
			   chart.draw(data, options);

		  }

		</script>
