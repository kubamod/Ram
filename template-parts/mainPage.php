<?php /* Template Name: mainPage */ ?>

<?php get_header(); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="slide-one">
	<div style="max-width:1300px; margin-left:auto; margin-right:auto;">
		<div class="row align-items-center">
			<div class="col-sm-8">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/1.png" class="img-fluid" width="900" />	
			</div>
			<div class="col-sm">
				<div class="my-auto">
				<h2>Gwarancja bezpieczeństwa</h2>
				Wybierając nasze usługi zapewniasz sobie gwarancję dobrego wykonania i bezpieczeństwa sieci.
				
				</div>
			</div>
		</div>	
	</div>
	</div>
    </div>
        <div class="carousel-item">
	<div class="slide-one">
	<div style="max-width:1300px; margin-left:auto; margin-right:auto;">
		<div class="row align-items-center">
			<div class="col-sm-8">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/5.png" class="img-fluid" width="900" />	
			</div>
			<div class="col-sm">
				<div class="my-auto"><h2>Zakładamy sieci</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
			</div>
		</div>	
	</div>
	</div>

    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<hr class="separator"/>

<div class="section-background">
<div class="section" id="oferta">
		<div class="row align-items-center">
			<div class="col-sm-6" style="padding-left:0; padding-right:0;">
				<div class="text-block my-auto"><h2>Zajmujemy się Sieciami komputerowymi</h2>
					Prawidłowo i wydajnie funkcjonująca sieć komputerowa to żaden luksus – to warunek Państwa sukcesu. Zapewnimy Państwu dobór wszelkiego sprzętu i urządzeń niezbędnych do bezproblemowego działania firmowej sieci komputerowej.
				</div>
			</div>

			<div class="col-sm order-first order-sm-last">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/2.png" class="img-fluid" />	
			</div>	
		</div>
</div>
</div>


<hr class="separator" style="margin-top:0;margin-bottom:100px;"/>

<div class="section-background">
<div class="section three">
		<div class="row align-items-center ">
			<div class="col-sm">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/3.png" class="img-fluid " />
			</div>
			<div class="col-sm">
				<div class="my-auto text-block" style="padding-bottom:50px"><h2>Zajmujemy się oprogramowaniem</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
			</div>	
		</div>

</div>
</div>


<hr class="separator" style="margin-bottom:100px; margin-top:100px;"/>
<!-- #################### O nas ##################### -->

<div class="section-background" id="oNas" style="background-color:#FFF;padding-bottom:50px; padding-top:50px;">
<div class="section white">
		<div class="row align-items-center ">
			<div class="col-sm-6">
				<div class="col-max text-block" style="float:right; margin-bottom:40px;"><h2>Profesjonalni</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
				<div class="col-max text-block" style="float:right;"><h2>Rzetelni</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
			</div>
			<div class="col-sm-6 col-img order-first order-sm-last ">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/4.png" class="img-fluid " style="float:right;"/>
			</div>	
		</div>
</div>
</div>

<hr class="separator" style="margin-bottom:70px;"/>
<!-- ################ MAPA ################ -->
<div class="section-background" id="kontakt" style="background-color:#000">
<div class="section last">
		<div class="row align-items-center ">
			<div class="col-md-4 ">
				<div class="col-max text-block map-text" >
					<h2>Kontakt</h2>
					Adres: Al. brzozowa 65, Chojnice 89-600<br />
					Email: Biuro@ramch.pl<br/>
					NIP: 5552121879</br />
					KRS: 0000757582<br />
					KRS: 0000757582<br />
					Godziny kontaktowe: 9:00 - 16:00
				</div>
			</div>
			<div class="col-md ">
				<div id="map"></div>
			<script>
			// Initialize and add the map
			function initMap() {
			  // The location of Uluru
			  var uluru = {lat: 53.6893463, lng: 17.5545156};
			  // The map, centered at Uluru
			  var map = new google.maps.Map(
			      document.getElementById('map'), {zoom: 15, center: uluru});
			  // The marker, positioned at Uluru
			  var marker = new google.maps.Marker({position: uluru, map: map});
			}
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRujaLARhmuKsTmhIQK6ylkJXHDj68qvQ&callback=initMap">
			    </script>

			</div>	
		</div>
</div>
</div>


</div>
<div class="container"></div>
<?php get_footer(); ?>
