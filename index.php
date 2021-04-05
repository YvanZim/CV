<!-- - - - - - - - - - - - - - - - - - - - - - - - -->
<!--

random: In the langage tab have a link to 'more languages' going to programing languages
have a favorite joke sections...


to do: 
	- optimise the for loops at the bottom
	- add 'default in case the header dosn't work
	- streatch images of sub-parts but nut text
	- Design title & Menu!!!
	- Test on ipad!
	- Sponsor page ??? idea of having a page with just ads...
	
 -->


<!DOCTYPE html>
<html lang="en">

	<head>
		
		<title> Resume - Yvan Zimmermann </title>
		
		<?php include('include/headfile.php') ?>
		
		<?php include('include/charts.php') ?>
		
		<?php include('include/resume_script.php') ?>
			
	</head>

	<body>
		
		<div class="container-fluid">
			
			<div class="row">
	
				<!-- sidebar -->
				<div class="col-md-3 col-sm-4 col-xs-12 sidebar">
					
					
					<!-- - - - - - - - - - -->
					<div class='picture'>
						
						<img src="pic/CVphoto.png" alt="profil_pic" id='headerpic'>
						
					</div>
					<!-- - - - - - - - - - -->
					
					
					<!-- - - - - - - - - - -->
					<div id='top_div_mobile'>

						<?php include('include/topMenu.php') ?>
								
					</div>
					<!-- - - - - - - - - - -->


					<!-- - - - - - - - - - -->
					<div id='persDet'>
						<h4> Personal details </h4>
						<table class='content_table'>
							<tr>
								<td> 
									<?php include('include/Bio.php')  ?>
								</td>
							</tr>
						</table>
					</div>
					<!-- - - - - - - - - - -->		


					<!-- - - - - - - - - - -->
					<div id='skills'>
						
						<h4> Key skills </h4>
						
						<table class='content_table'>
							
							
							<!-- Marketing Skills -->
							<tr>
								
								<td> Digital Marketing 
									<div class='image_sub_div'> </div>
									<span class='hide_bloc'>: Inbound Marketing / Content marketing </span>
									<div class='disp_bloc'>
										<ul>
											<li class='r5'> Social media marketing </li>
											<li class='r5'> Content marketing </li> 
											<li class='r4'> Inbound marketing </li>
											<li class='r4'> Search Engine Optimization (SEO) </li> 
											<li class='r4'> Pay-Per-Click (PPC) </li>
											<li class='r3'> Marketing automation </li>
											<li class='r3'> Email marketing </li>
										</ul>
									</div>
									<!-- <div class='image_sub_col'> </div> -->
								</td>								
								
							</tr>
							
							<!-- Marketing Software -->
							<tr>
								
								<td> Marketing Software
									<div class='image_sub_div'> </div>
									<div class='disp_bloc'>
										<ul>
											<li class='r5'> HubSpot start </li>
											<li class='r4'> Marketing Hub </li> 
											<li class='r3'> Sales Hub </li>
											<li class='r4'> Google Analytics </li>
											<li class='r3'> Mailchimp </li>
										</ul>
									</div>
									<!-- <div class='image_sub_col'> </div> -->
								</td>								
								
							</tr>
														
							<!-- Language -->
							<tr>
								
								<td> Languages 
									<div class='image_sub_div'> </div>
									<span class='hide_bloc'>: French English </span>
									<div class='disp_bloc'>
										<ul>
											<li class='r5'> French</li>
											<li class='r5'> English </li>
											<li class='r1'> German </li>
											<li id='morelang'><a> More languages... </a></li>
										</ul>
									</div>
									<!-- <div class='image_sub_col'> </div> -->
								</td>

								
								
							</tr>
							
							<!-- Computer science -->
							<tr>
								<!-- <td> 2016 - 2017 </td> -->
								<td class='main_sub_header'> 
									Computer Science 
									<div class='image_sub_div'> </div>
									<!-- <span class='hide_bloc'> Java HTML CSS PHP JavaScript SQL </span> -->
									<div class='disp_bloc'>
										<br class='small_spacing'>
										Web Design: 
										<ul>
											<li class='r5'> HTML </li>
											<li class='r4'> CSS </li>
										</ul>
										<br class='small_spacing'>	
										Programing languages:
										<ul>	
											<li class='r5'> Jquery </li>
											<li class='r4'> PHP </li>
											<li class='r4'> JavaScript </li>
											<li class='r3'> Java </li>
											<li class='r2'> Swift </li>
										</ul>
										<br class='small_spacing'>
										Databases:
										<ul>
											<li class='r5'> pgSQL </li>
											<li class='r5'> mySQL</li>
										</ul>
										<br class='small_spacing'>
										CMS:
										<ul>
											<li class='r5'> Wordpress </li>
											<li class='r5'> Hubspot CMS </li>
										</ul>
									</div>
									<!-- <div class='image_sub_col'> </div> -->
								</td>
								
								<!-- <td class='image_sub_col'> </td> -->
								
							</tr>
							
							<!-- IT -->
							<tr>
								<!-- <td> 2016 - 2017 </td> -->
								<td class='main_sub_header'> 
									IT
									<div class='image_sub_div'> </div>									
									<span class='hide_bloc'>: OS & Windows use and repairs / Audio-visuals equipment </span>
									<div class='disp_bloc'>
										<br class='small_spacing'>
										Operating systems (use and repairs): 
										<ul>
											<li class='r5'> OS</li>
											<li class='r5'> Windows</li>
											<!-- (use and repairs) -->
											<li class='r3'> Linux (Ubuntu) </li>
											<!-- (use) -->
										</ul>
										Audio-visuals equipment:
										<ul>
											<li> installation & use </li>
										</ul>
									</div>
									<!-- <div class='image_sub_col'> </div> -->
								</td>
								
								<!-- <td class='image_sub_col'> </td> -->
								
							</tr>
							
							<!-- Software -->
							<tr>
								<!-- <td> 2016 - 2017 </td> -->
								<td class='main_sub_header'> 
									Software 
									<div class='image_sub_div'> </div>
									<span class='hide_bloc'>: Office pack / Photoshop / Final Cut Pro </span>
									<div class='disp_bloc'>
										<br class='small_spacing'>
										General Software:
										<ul>
											<li class='r3'> SPSS </li>
											<li class='r4'> Photoshop </li>
											<li class='r4'> Illustrator </li>
											<li class='r3'> InDesign </li>
											<li class='r3'> Final Cut Pro </li>
										</ul>
										
										Office pack:
										<ul>
											<li class='r5'> Word </li>
											<li class='r5'> Excel </li>
											<li class='r4'> Outlook </li>
											<li class='r5'> Powerpoint </li>
											<li class='r3'> Access </li>
										</ul>
									</div>
								</td>
								
								<!-- <td class='image_sub_col'> </td> -->
								
							</tr>
							
						</table>
						
					</div>
					<!-- - - - - - - - - - -->
			
			
					<!-- - - - - - - - - - -->
					<div id='inter'>
						
						<h4> Achievement & interests </h4> <!-- volunteering can go here -->
						
						<table class='content_table'>
							
							
							<!-- Magic -->
							<tr>
								<!-- <td> 2010 - 2017 </td> -->
								<td class='main_sub_header'> Magic (Performing arts)
									<div class='image_sub_div'> </div>
									<div class='disp_bloc'>
										<br class='spacing'>
										<p> For the past 7 years I have been learning, practicing and performing magic. </p>
										<br class='spacing'>
										<?php include('include/instagram.php') ?>
										<br class='spacing'>
										<p>	I've performed for all kinds of audiences: Stage shows, 
											charity events, corporate events, kids shows... 
										</p>
									</div>
								</td>
							</tr>
							
							
							<!-- web design -->
							<tr>
								<td> Web design & blogging
									<div class='image_sub_div'> </div>
									<div class='disp_bloc'>
										<ul>
											<br class='spacing'>
											<li> <a href='http://rightpint.eu' target="_blank"> Rightpint.eu </a> 
												, a University project, designed to help people find the perfect pub 
												in Dublin.
												
											</li>
											<br class='spacing'>
											<li> <a href='http://playlistgallery.com' target="_blank"> PlaylistGallery.com </a>  
												  a website for people to share and discover music.
											</li>
											<br class='spacing'>
										</ul>
										<p> Take a look my <a href='project.php'> project page </a> for more information. 
									</div>
								</td>
							</tr>
							
							
							<!-- Reading -->
							<tr>
								<!-- <td> 2016 - 2017 </td> -->
								<td class='main_sub_header'> 
									Reading 
									<div class='image_sub_div'> </div>
									<div class='disp_bloc'>
										<ul>
											<br class='spacing'>
											<li> 
												Favorite non-fiction:
												<p> "Contagious" by Jonah Berger and 
												"Three Cups of Tea" by David Oliver Relin and Greg Mortenson. 
												</p>
											</li>
											<br class='spacing'>
											<li> 
												Favorite fiction:
												<p> The "Harry Potter" series which I grew up with and, more recently, 
													"A Shadow of the Wind" by Carlos Ruiz Zafón.
												</p>
											</li>
											<br class='spacing'>
										</ul>	
									</div>
								 </td>
							</tr>
							
							
							<!-- sports -->
							<tr>
								<!-- <td> 2016 - 2017 </td> -->
								<td class='main_sub_header'> Sports:  
									<span><i>  Rock climbing / Swimming / Running / Tennis </i></span>
								</td>
								<!-- <td class='image_sub_col'> </td> -->
							</tr>
							
							
						</table>
						
					</div>
					<!-- - - - - - - - - - -->
					
			
				</div>
				<!-- end of the sidebar -->
			
				<!-- mainbody -->
				<div class="col-md-9 col-sm-8 col-xs-12 mainbody">
					

					<!-- - - - - - - - - - -->
					<div id='top_div'>

						<?php include('include/topMenu.php') ?>
	
					</div>
					<!-- - - - - - - - - - -->
					
					<!-- - - - - - - - - - -->
					<div id='work'>
						
						<h4> Work experiences </h4>
						
						<table class='content_table'>
							
							<!-- PartyWizz -->
							<tr>
								<td> 2018 </td>
								
								<td class='main_sub_header'> 

									<p> Ditial Marketing Freelance - <a href='https://partywizz.com'> PartyWizz </a>, Dublin ( 2 months ) </p>
									
									<br class='spacing'>
									
									<p class='hide_bloc'> Marketing funnel implementation / Content creation / SEO optimisation </p>

									<div class='disp_bloc'>
										
										<div class='disp_bloc'>
										
											<div class='chartpic' id='partyWizzChart'> 
												<ul>
													<li> Market Analysis </li>
													<li> Content Creation </li>
													<li> Email marketing </li>
													<li> SEO optimisation </li>
													<li> Funnel implmentations </li>
												</ul>	
											</div>
										
										<p> I am currently working as a digital marketing freelancer for PartyWizz. My focus is on content creation, lead generation and SEO optimisation.</p>

									</div>
									
								</td>
								
								<td class='image_sub_col'> 
									<img src='pic/PartyWizz.jpg' alt='Hubspot logo' class='lineLogo' style='border-radius:100%'> 
								</td>
								
							</tr>
							
							
							<!-- Hubspot -->
							<tr>
								<td> 2018 - 2017 </td>
								
								<td class='main_sub_header'> 

									<p> Content Marketing Internship for Growing Markets (France) - <a href='https://hubspot.com'> HubSpot </a>, Dublin ( 1 year ) </p>
									
									<br class='spacing'>
									
									<p class='hide_bloc'> Content creation & localisation / Campaigns creation & analysis / Social media, monitoring and publishing  </p>

									<div class='disp_bloc'>
										
										<div class='disp_bloc'>
										
											<div class='chartpic' id='hubChart'> 
												<ul>
													<li> Customer service </li>
													<li> Software and Hardware Repairs </li>
													<li> Audio visual equipment installation </li>
													<li> Web design </li>
													<li> Video editing </li>
													<li> Inventory management </li>
												</ul>	
											</div>
										
										<p> I worked 11 months at HubSpot where I did marketing for the French market. While my main focus was on "Top of the funnel" content, France, being a relitivly new market for HubSpot, I got a chance to do a bit of everything. </p>

									</div>
									
								</td>
								
								<td class='image_sub_col'> 
									<img src='pic/sprocket.png' alt='Hubspot logo' class='lineLogo'> 
								</td>
								
							</tr> 
							
							<!-- Bishops -->
							<tr>
								
								<td> 2016 - 2012 </td>
								
								<td class='main_sub_header'> 

									<p> Information technology services (ITS) student assistant - <a href='https://ubishops.ca'> Bishops University </a>, Québec</p>
									<br class='spacing'>
									<p class='hide_bloc'> Customer service / Software and hardware repairs / Events set up / Inventory management </p>
									
									<!-- disp bloc -->
									<div class='disp_bloc'>

										<div class='chartpic' id='itchart'> 
											<ul>
												<li> Customer service </li>
												<li> Software and Hardware Repairs </li>
												<li> Audio visual equipment installation </li>
												<li> Web design </li>
												<li> Video editing </li>
												<li> Inventory management </li>
											</ul>	
										</div>
										
										<p> I worked for 3 year, part-time, at the ITS while completing my BBA. This fueled my passion for technology… and for coffee. </p>

									</div>
									<!-- end of disp bloc -->
									
								</td>
									<td class='image_sub_col'> <img src='pic/bu_logo.png' alt='bishops university' class='lineLogo'>
								</td>
								
							</tr>
					
							<!-- IT -->
							<tr>
								<td> 2016 - 2015 </td>
								
								<td class='main_sub_header'> 
									
									<p> Marketing Internships - The old Lennoxville golf course, Quebec </p>
										
									<div class='disp_bloc'>
										
										<div class='chartpic' id='markChart'>
											
										</div>
										
										<p> I was hired to implement the<a href='#comproj0'> marketing plan </a> 
										I had developped through one of my courses. This part-time study lasted 8 momth  </p>
										
									</div>
									
								</td>
								
								<td class='image_sub_col'> <img src='pic/golf-logo.png' alt='bishops university' class='lineLogo'> </td>
								
							</tr>
	
							<!-- teatcher assistant -->
							<tr>
								<td> 2016 </td>
								<td class='main_sub_header'> Marketing Teacher Assistant for University courses - Bishops University, Québec (4 months)</td>
								<td class='image_sub_col'> 
									<img src='pic/bu_logo.png' alt='bishops university' class='lineLogo'>
								</td>
							</tr>
					
							<!-- waiter and animator -->
							<tr>
								<td> 2012 </td>
								<td class='main_sub_header'> Waiter and animator at LUDIMAX - Villepreux, France (5 weeks) </td>
								<td class='image_sub_col'> </td>
							</tr>

						</table>
						
					</div>
					<!-- - - - - - - - - - -->
					
					
					<!-- - - - - - - - - - -->
					<div  id='edu'>
						
						<h4> Education </h4>
						
						<table class='content_table'>
							
							<!-- Smurfit year -->
							<tr>
								<td> 2017 - 2016 </td>
								<td class='main_sub_header'> 
								
									<p> M.S.c Marketing – UCD Michael Smurfit Graduate Business School </p>
				
									<div class='disp_bloc'>
										
										<div class='chartpic' id='MSCchart'>
											<!-- add the ul list here -->
										</div>
										
										<p> You can read more about the Michael Smurfit Graduate Business School
										<a href='http://www.smurfitschool.ie/ourcourses/masters/
										marketing/mscinmarketing/duration,192081,en.html' target="_blank">
										 http://www.smurfitschool.ie </a>
										</p>
										
									</div>
	
								</td>
								<td class='image_sub_col'>
									<img src='pic/logo_smurfit.png' alt='smurfit business school' class='lineLogo'>
								</td>
							</tr>
					
							<!-- Bishops years -->
							<tr>
								<td> 2016 - 2012 </td>
								<td class='main_sub_header'>
									<p> B.B.A Bachelors of Business administration - Bishops University, Québec </p>
									<br class='spacing'>
									<p class='hide_bloc'>  Concentration in Marketing & Management / Minor in Computer Science </p>
									
									<div class='disp_bloc'>
										
										<div class='chartpic' id='BBAchart'> 
											<!-- <img src="pic/BBAchart.png" alt="BBA chart"  > -->
										</div>
										
										<p> 10 000 hours to mastery... still in progress! You can read more about the William school
											 of Business program here at
										 	<a href='http://www.ubishops.ca/academic-programs/williams-school-of-business/' target="_blank">
												http://www.ubishops.ca
											</a>
										</p>
																	
									</div>
								</td>
								<td class='image_sub_col'>
									<img src='pic/bu_logo.png' alt='bishops university' class='lineLogo'>
								</td>
							</tr>
					
							<!-- Bafa -->
							<tr>
								<td> 2013 </td>	
								<td class='main_sub_header'> B. A. F. A: French Certificate of Youth leader and Animation </td>
								<td class='image_sub_col'> </td>
							</tr>
					
							<!-- IND years -->
							<tr>
								<td> 2012 </td>
								<td class='main_sub_header'> 
							
									<p> Leaving Certificate – French Baccalauréat with distinction </p>
									<br class='spacing'>
									<p> Bilingual Section - Cambridge Advanced Certificate (CEA, English) </p>
						 		    
								 </td>
								 
								 <td class='image_sub_col'> 
								 	<img src='pic/ind-logo.png' alt='bishops university' class='lineLogo'>
								 </td>
							</tr>
							
						</table>		
						
					</div>
					<!-- - - - - - - - - - -->

	
					<!-- - - - - - - - - - -->
					<div id='comproj'>
						
						<h4> In company projects </h4>
						
						<table class='content_table'>
							
							<!-- Company projects -->
							<tr>
								<td> 2016 </td>
								
								<td class='main_sub_header'>  
							
									<p> "Old Lennoxville Golf": marketing plan and strategy elaboration (4 months part-time) </p>
									<br class='spacing'>
									<p class='hide_bloc'>  Industry analysis / audience targeting / branding / Customer satisfaction assessment </p>

									<div class='disp_bloc'>
										
										<div class='chartpic' id='golfcompproj'>
											<ul>
												<li> Industry analysis </li>
												<li> Audience targeting </li>
												<li> Branding </li>
												<li> Customer satisfaction assessment </li>
											</ul>
										</div>
										
										<p> Through our 'Happiness marketing' course we desiged a marketing plan for the 'old
									    lennoxville golf club' which we then implmented through <a href='#work1'> an independent study </a>. </p>
											
									</div>
							
								</td>
								
								<td class='image_sub_col'> </td>
							</tr>
							
							<!-- Arches brewery -->
							<tr>
								<td> 2015 </td>
								<td class='main_sub_header'> 
							
									<p> "Arches Brewery": marketing research (4 months part-time) </p>
									<br class='spacing'>
									<p class='hide_bloc'> Primairy and secondary marketing research </p>
							
									<div class='disp_bloc'>
										
										<div class='chartpic' id='brewcompproj'>
											<ul>
												<li> Research design </li>
												<li> Data collection </li>
												<li> Data Analysis ( SPSS ) </li>
												<li> Research presentation </li>
											</ul>
										</div>
										
										<p> For our 'Marketing research' course we conducted research to gain insights on targeting,
											 branding and consumer preference for the 'Bishops arches brewery'.
										</p>
										
									</div>
							
								</td>
								<td class='image_sub_col'> </td>
							</tr>
					
							<!-- Poissonnerie 3 lacs -->
							<tr>
								<td> 2013 </td>
								
								<td class='main_sub_header'>
							
									<p> "Poissonnerie les trois lacs" : management analysis and feasibility study (4 months part-time) </p>
									<br class='spacing'>
									<p><i> Analysis of financial investments opportunities and costs / Industry practices research </i></p>
	
								</td>
								
								<td class='image_sub_col'> </td>
							</tr>

						</table>
					</div>
					<!-- - - - - - - - - - -->
					
					
					<!-- - - - - - - - - - -->
					<div id='vol'>
						
						<h4> Volunteering </h4> <!-- volunteering can go here -->
						
						<table class='content_table'>
							
							<!-- Enactus -->
							<tr>
								<td> 2016 - 2012 </td>
								<td class='main_sub_header'> 
									<!-- <br> -->
									<p> ENACTUS: Social entrepreneurship (4 years) </p>
									<!-- <br> -->
									<div class='disp_bloc'>
										<br class='small_spacing'>
										<p> During my time at ENACTUS the two projects I worked on were: </p>
										<br class='spacing'>
										<ul>
											<li><p><b> Fedec:</b> teaching fundamental budgeting to kids from less privileged areas  </p></li>
												<br class='spacing'>
											<li><p><b> Bluetack:</b> a platform to promote a conversation between 
											Bishops alumni the students </p> </li>
											<br class='spacing'>
										</ul>
										Lean more about the organization at <a href='http://enactus.org/' target="_blank"> enactus.org </a>
									</div>
									
								</td>
								<td class='image_sub_col'>
									<img src='pic/enactus-logo.png' alt='enactus_logo' class='lineLogo'>
									<br>
								</td>
							</tr>
					
							<!-- Bafa -->
							<tr>
								<td> 2016 </td>
								<td class='main_sub_header'> 
									<p> Animation in Pyreneans for kids aged 12 to 15 (2 weeks) </p>
								</td>
								<td class='image_sub_col'> <img src='pic/vac_av_logo.png' alt='Vacance energy aventure logo' class='lineLogo'> </td>
							</tr>
					
							<!-- Scouts chef -->
							<tr>
								<td> 2012 </td>
								<td class='main_sub_header'> 
									<p> Chef scout: supervision of teenagers age 12 to 17ans (1 year) </p>
								</td>
								<td class='image_sub_col'> 
									<img src='pic/suf_logo.png' alt='SUF logo' class='lineLogo'>
								</td>
							</tr>
					
							<!-- Scouts memeber -->
							<tr>
								<td> 2011 - 2004 </td>
								<td class='main_sub_header'>
									<p>  Scout member for 8 years:  “Scouts Unitaires de France”  </p>
								</td>
								<td class='image_sub_col'>
									<img src='pic/suf_logo.png' alt='SUF logo' class='lineLogo'>
								</td>
							</tr>
							
							<!-- Mun -->
							<tr>
								<td> 2012 - 2007 </td>
								
								<td class='main_sub_header'>
									<p>  Member of M.U.N and head of delegation at PAMUN  </p>
								</td>
								
								<td class='image_sub_col'> 
									<img src='pic/mun.png' alt='MUM logo' class='lineLogo'> 
								</td>
							</tr>
					
						</table>
						
					</div>
					<!-- - - - - - - - - - -->
					
					
				</div>
				<!-- end of mainbody -->
				
			</div>

			<!-- include the footer -->
			<?php include('include/footer.php') ?>
			
			
		</div> <!-- end of container -->
		
	</body>

</html>
<!-- - - - - - - - - - - - - - - - - - - - - - - - -->


























