<!-- - - - - - - - - - - - - - - - - - - - - - - - -->
<script>

			// array with all the main id of the html page
			main_header = [
							['persDet', true], 
							['edu', true], 
							['work', true], 
							['comproj', true], 
							['inter', true], 
							['vol', true], 
							['skills', true]
						];
	
			/* multi-dimentional array that is to be populated with all the id's that are created */
			tr_header = [];

			$(document).ready(function(){

				// Open and close main parts
				for (i = 0; i < main_header.length; i++){
			
					// get the header id
					idkey = '#' + main_header[i][0];
					
					// change the + & - icone
					$(idkey + ' h4').prepend(
						$('<img>').attr({'class': 'plus_minus_pic plus_pic', 'src': 'pic/+.png', 'alt': '+'}).css('display', 'none'),
						$('<img>').attr({'class': 'plus_minus_pic minus_pic', 'src': 'pic/_.png', 'alt': '-'})
					);
					
					// on h4 click
					$( idkey + ' h4').click({counter: i, idkey: idkey}, function(event){
			
						counter = event.data.counter;
				
						idkey = event.data.idkey;
						
						// on click show the 'main' div 
						if ( main_header[counter][1] == true){

							$(idkey + ' .content_table').hide();
					
							$(idkey + ' .minus_pic').hide();
					
							$(idkey + ' .plus_pic').show();
						
							main_header[counter][1] = false;

						}
						
						// on click hide the 'main' div 
						else {

		 					$(idkey + ' .content_table').show();
					
							$(idkey + ' .plus_pic').hide();
					
							$(idkey + ' .minus_pic').show();
					
		 					main_header[counter][1] = true;

		 				}
						
					});

				} // end of the main for loop




		
				// Open and close main sub-parts
				for (key = 0; key < main_header.length; key++){
			
					
					
					// Main sub header array for tr
					tr_header.push( [] );
			
					
					
					// get length of table
					tableLength = $('#' + main_header[key][0] + ' .content_table tr').length
			
					
					
					// loop through table
					for (innerKey = 0; innerKey < tableLength; innerKey++){
						
						
						
						// declare the loop
						mainKey = '#' + main_header[key][0];
						
						
						
						// create the new key 
						newId = main_header[key][0] + innerKey;
						
						
						
						// array set sub-parts to closed as default
						tr_header[key].push( [newId, false] )
						
						
						
						// add the id to the the inner ellement
						$(mainKey + ' .content_table tr:eq(' + innerKey + ')').attr('id', newId);
						
						
						
						// on click id
						$(mainKey).on('click', '#' + newId, {key: key, innerKey: innerKey}, function(event){
					
							counter = event.data.innerKey;
					
							key = event.data.key;
					
							trId = tr_header[key][counter];

							// show the more block
							if ( trId[1] == true){

								$('#' + trId[0] + ' .disp_bloc').hide();
								
								$('#' + trId[0] + ' .hide_bloc').show();
						
								$('#' + trId[0] + ' .moreIcon').empty();
								
								$('#' + trId[0] + ' .moreIcon').append('[&nbsp;more&nbsp;]');
								
								trId[1] = false;

							}
							
							// hide the more block
							else{

								$('#' + trId[0] + ' .disp_bloc').show();
								
								$('#' + trId[0] + ' .hide_bloc').hide();
							
		 						$('#' + trId[0] + ' .moreIcon').empty();
								
		 						$('#' + trId[0] + ' .moreIcon').append('[&nbsp;less&nbsp;]');
						 
								trId[1] = true;

							}
	
							
						});
						
						
						
						// add odd background
						if (innerKey % 2 == 0){
					
							$('#' + newId).attr('class', 'odd_background');
					
						}
						
						// 
						
						// add the more elements
						if ( $('#' + newId  + ' .disp_bloc').is(":hidden") ){

							$('#' + newId + ' .image_sub_col').append(

								$('<span>').addClass('moreIcon').append('[&nbsp;more&nbsp;]')

							);
							
							$('#' + newId + ' .image_sub_div').append(

								$('<span>').addClass('moreIcon').append('[&nbsp;more&nbsp;]')

							);

						}
						
	
					}	
					
					
				} // end of the inner colapse 
	
				
				// $('.image_sub_col').append(
	//
	// 				$('<span>').addClass('moreIcon').append('[&nbsp;more&nbsp;]')
	//
	// 			);
				
				
				
				
					// if ( $('.disp_bloc').is(':hidden') ){
		
				//$('.image_sub_col')
			//	$('.disp_bloc').parent()
				
				
									//
					// $('.image_sub_col').append(
					//
					// 	$('<span>').addClass('moreIcon').append('[&nbsp;more&nbsp;]')
					//
					// );
					//
	
	
				// - - - - - - - display the stars - - - - - - - - //
				for (i = 0; i <= 5; i++){
			
					id = '.r' + i;
			
					for (j = 5; j > 0; j--){
				
						if (j <= i){
				
							$(id).prepend(
				
								$('<img>').attr({'src': 'pic/starFull.png', 'alt': 'star_full', 'id': 'starpic'})
							)	
				
						}
						
						else{
				
							$(id).prepend(
				
								$('<img>').attr({'src': 'pic/starEmpty.png', 'alt': 'star_full', 'id': 'starpic'})
							)	
				
						}
				
				
					}
			
			
				}
				// - - - - - - end of star display - - - - - - - - //








				// - - - - - - move between div's - - - - - - - - //
				$('#comproj').on('click', '#comproj0 a', function(){ 
			
					$('#work1').trigger('click'); 
			
					scroll_to('#work1', 50);

				});
		
				$('#work').on('click', '#work1 a', function(){ 
			
					scroll_to('#comproj0', 260);
			
					$('#comproj0').trigger('click'); 
		
				});
		
				$('#skills').on('click', '#morelang a', function(){ 
			
					scroll_to('#skills1', 62);
			
					$('#skills1').trigger('click');
			
				});
		
				function scroll_to(id, margin){
			
				    $('html,body').animate({ scrollTop: $(id).offset().top - margin}, 'slow'); 
			
				}
				// - - - - - - - - - - - - - - - - - - - - - - - - //

		
			});

</script>
<!-- - - - - - - - - - - - - - - - - - - - - - - - -->