<?php /* Template Name: mainPage */ ?>

<?php get_header(); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
	<div class="slide-one"></div>
    </div>
    <div class="carousel-item">
	<div class="slide-one"></div>
    </div>
    <div class="carousel-item">
	<div class="slide-one"></div>
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
<div class="section-background">

<div class="section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-sm-6">
				<div class="my-auto"><h2>Lorem ipsum</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum.<span class="gradient"> Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</span></div>
			</div>

			<div class="col-sm">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/2.png" class="img-fluid" />	
			</div>	
		</div>
	</div>
</div>
</div>
<div class="section-background">
<div class="section three">
		<div class="row align-items-center ">
			<div class="col-sm">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/3.png" class="img-fluid " />
			</div>
			<div class="col-sm">
				<div class="my-auto"><h2>Lorem ipsum</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
			</div>	
		</div>
</div>
</div>
<div class="section-background" style="background-color:#eee">
<div class="section white">
		<div class="row align-items-center ">
			<div class="col-sm-6">
				<div class="col-max" style="float:right;"><h2>Lorem ipsum</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
				<div class="col-max" style="float:right;"><h2>Lorem ipsum</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
			</div>
			<div class="col-sm-6 ">
				<img src="<?php echo bloginfo('template_directory'); ?>/assets/images/4.png" class="img-fluid " style="float:right;"/>
			</div>	
		</div>
</div>
</div>

<div class="section-background" style="background-color:#000">
<div class="section last">
		<div class="row align-items-center ">
			<div class="col-sm-6">
				<div class="col-max" style="float:right;"><h2>Lorem ipsum</h2> dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar tortor sit amet ex vehicula, in sollicitudin metus elementum. Phasellus efficitur metus et felis elementum, vel semper ligula tristique. Aliquam nec lectus ac lectus fermentum euismod. Vivamus augue dui, mattis id laoreet a, bibendum quis urna. Proin vitae leo ligula.</div>
			</div>
			<div class="col-sm-6 ">
				<div id="map"></div>
			<script>
			// Initialize and add the map
			function initMap() {
			  // The location of Uluru
			  var uluru = {lat: -25.344, lng: 131.036};
			  // The map, centered at Uluru
			  var map = new google.maps.Map(
			      document.getElementById('map'), {zoom: 4, center: uluru});
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
