
<!doctype html>

<html lang="en">

<head>

	<title>Flatbook</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/flatbook-challenge/main.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
	  	function initialize() {
	  		var mapCanvas = document.getElementById('map-large');
	  		var mapCanvas2 = document.getElementById('map-small');

    		var mapOptions = {
		      	center: new google.maps.LatLng(45.5017, -73.5673),
		      	zoom: 15,
		      	mapTypeId: google.maps.MapTypeId.ROADMAP,
		      	mapTypeControl:false,
		      	streetViewControl: false,
		    }
		    var map = new google.maps.Map(mapCanvas, mapOptions);
		    var map2 = new google.maps.Map(mapCanvas2, mapOptions);

		    var marker = new google.maps.Marker({
			    map:map,
			    position: new google.maps.LatLng(45.5017, -73.5673),
			    icon: './img/flatbook-challenge/map_pin.png' // null = default icon
			 });
		    var marker2 = new google.maps.Marker({
			    map:map,
			    position: new google.maps.LatLng(45.5000, -73.5663),
			    icon: './img/flatbook-challenge/map_pin.png' // null = default icon
			 });
		    var marker3 = new google.maps.Marker({
			    map:map2,
			    position: new google.maps.LatLng(45.5000, -73.5663),
			    icon: './img/flatbook-challenge/map_pin.png' // null = default icon
			 });
	  	}
	  	google.maps.event.addDomListener(window, 'load', initialize);

	</script>


</head>

<body>

	
	<div class="blurcontainer">
	<div class="content">
		<div class="location">
			<span>CITIES</span>
			<span class="divider">></span>
			<span class="back">MONTREAL</span>

			<span class="fv divider" style="display:none">></span>
			<span class="fv" style="display:none">APARTMENT NAME</span>
		</div>
		<div class="search">
			
			<div class="details">
				<div class="row">
					<div class="item">Lease Term</div>
					<div class="option">
						<input class="date" type="text" placeholder="Moving in">
					
						<input class="date" type="text" placeholder="Moving out">
						<div class="moz-select">
							<select>
						        <option selected>No Roommates</option>
						        <option>1 Roommate</option>
						        <option>2 Roommates</option>
						        <option>3 Roommates</option>
						        <option>4 Roommates</option>
						        <option>5 Roommates</option>
						    </select>

						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="item">Apartment</div>
					<div class="option">
						<div class="moz-select bed">
							<select id="bed">
						        <option selected> 1 Bedroom </option>
						        <option>2 Bedrooms</option>
						        <option>3 Bedrooms</option>
						        <option>4 Bedrooms</option>
						        <option>5 Bedrooms</option>
						    </select>
						</div>
					    
						<div class="moz-select bath">
							<select id="bath">
						        <option selected> 1 Bathroom </option>
						        <option>2 Bathrooms</option>
						        <option>3 Bathrooms</option>
						        <option>4 Bathrooms</option>
						        <option>5 Bathrooms</option>
						    </select>
						</div>
					    
						<div class="moz-select bath"><select id="size">
					        <option selected> +1000 sq ft </option>
					        <option>1000 - 2000 sq ft</option>
					        <option>2000 - 3000 sq ft</option>
					        <option>3000+ sq ft</option>
					    </select></div>
					    
					</div>
				</div>
				<div class="row">
					<div class="item ">Price Range</div>
					<div class="option">
						<div class="progress">
							<div class="progress-fill"></div>
							<div class="progress-grey"></div>
						</div>
						
						<input type="range" id="pricerange" name="points" min="1400" max="3000">
						<div class="label">$1400
						</div>
					</div>
				</div>
			</div>
			<div class="results">
				<div class="filters">
					<div class="bars">
						<div class="filt">More Filters</div>
						<div class="filt">Apartment Type<div class="close"></div></div>
						<div class="filt">Price<div class="close"></div></div>
					</div>

					<div class="number">27 listings <span>&#9679;</span> Montreal</div>

				</div>
				<div class="listings">
					<div class="apartment">
						<div class="preview"></div>
						<div class="fav"></div>
						<div class="price">
							<span class="dolla">$</span>
							3,995
							<span class="per">/month</span>
						</div>
						<div class="info">
							<div class="title">
								Apartment Name
							</div>
							<div class="address">
								251 Roy #1, Montreal, H2W 1M7
							</div>
						</div>
						<div class="stats">
							<div class="item size">1500 sq ft</div>
							<div class="item bath">2</div>
							<div class="item bed">5</div>
						</div>
					</div>
					<div class="apartment">
						<div class="preview"></div>
						<div class="fav inactive"></div>
						<div class="price">
							<span class="dolla">$</span>
							3,995
							<span class="per">/month</span>
						</div>
						<div class="info">
							<div class="title">
								Apartment Name
							</div>
							<div class="address">
								251 Roy #1, Montreal, H2W 1M7
							</div>
						</div>
						<div class="stats">
							<div class="item size">1500 sq ft</div>
							<div class="item bath">2</div>
							<div class="item bed">5</div>
						</div>
					</div>
					<div class="apartment">
						<div class="preview"></div>
						<div class="fav inactive"></div>
						<div class="price">
							<span class="dolla">$</span>
							3,995
							<span class="per">/month</span>
						</div>
						<div class="info">
							<div class="title">
								Apartment Name
							</div>
							<div class="address">
								251 Roy #1, Montreal, H2W 1M7
							</div>
						</div>
						<div class="stats">
							<div class="item size">1500 sq ft</div>
							<div class="item bath">2</div>
							<div class="item bed">5</div>
						</div>
					</div>
					<div class="apartment">
						<div class="preview"></div>
						<div class="fav inactive"></div>
						<div class="price">
							<span class="dolla">$</span>
							3,995
							<span class="per">/month</span>
						</div>
						<div class="info">
							<div class="title">
								Apartment Name
							</div>
							<div class="address">
								251 Roy #1, Montreal, H2W 1M7
							</div>
						</div>
						<div class="stats">
							<div class="item size">1500 sq ft</div>
							<div class="item bath">2</div>
							<div class="item bed">5</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		
		<div class="fullview hidden" style="display:none">
			<div class="pic"></div>
			<div class="info">
				<div class="title">
					Apartment Name
				</div>
				<div class="address">
					251 Roy #1, Montreal, H2W 1M7
				</div>
			</div>
			<div class="stats">
				<div class="item">
					<img src="img/flatbook-challenge/bed.png"><br>
					5 Bedrooms
				</div>
				<div class="item">
					<img src="img/flatbook-challenge/bathroom.png"><br>
					2 Bathrooms
				</div>
				<div class="item">
					<img src="img/flatbook-challenge/size.png"><br>
					1500 sq ft
				</div>
			</div>
			<div class="scrollinfo">
				<div class="blurred"></div>
				<div class="topbar">
					<span class="left">starting at </span>
					<span class="right per">/month</span>
					<span class="right">3,995</span>
					<span class="right dolla">$</span>
				</div>
				<div class="scrollbox">
					<div class="button">
						apply for lease
					</div>
					<div class="button fav">
						<div class="heart"></div>add to wishlist
					</div>
					<div class="share">
						Share: 
						<div class="icon fb"></div>
						<div class="icon tw"></div>
						<div class="icon ph"></div>
						<div class="icon em"></div>
					</div>
				</div>
			</div>
			<div class="about">
				<div id="about" class="heading">About the apartment</div>
				<div class="desc">
					This 2 floor, 5-bedroom, 2-bathroom apartment is located on a quiet street right on the border the festive Latin Quarter and the trendy Plateau-Mont Royal. Huge space, fully renovated in 2014, with a dishwasher, washer/dryer and a balcony. An 8 minute walk to two metro lines and a number of bus routes, this apartment is great for students going to McGill, Concordia, UQAM, or anyone who wants to be in the heart of city.
				</div>
				<div class="photos">
					<div class="photocontainer">
						<img src="img/flatbook-challenge/sample1.png">
					</div>
					<div class="photocontainer">
						<img src="img/flatbook-challenge/sample2.png">
					</div>
					<div class="photocontainer">
						<img src="img/flatbook-challenge/sample3.png">
						<div class="overlay">
							See all 14 photos
						</div>
					</div>
				</div>
				<div id="amenities" class="section">
					<div class="heading">Amenities</div>
					<ul>
						<li>Fully Furnished</li>
						<li>Television</li>
						<li>Internet</li>
						<li>Refrigerator</li>
						<li>Stove & Oven</li>
						<li>Coffee Maker</li>
						<li>Microwave</li>
						<li>Toaster</li>
					</ul>
					<ul>
						<li>Dishes & Utensils</li>
						<li>Pots & Pans</li>
						<li>Dishwasher</li>
						<li>Washing Machine</li>
						<li>Clothing Dryer</li>
						<li>Air Conditioner</li>
						<li>Balcony</li>
					</ul>
				</div>
				<div class="section" id="terms">
					<div class="heading">Terms & Pricing</div>
					<div class="col">
						8 to 10 month Lease:
						<br>
						<b>$3,995 / month</b>
						<br><br>
						4 to 7 month Lease:
						<br>
						<b>$5,993 / month</b>
					</div>
					<div class="col">
						Starting September 1st
						<br><br><br>
						Starting September 1st
					</div>

				</div>

			</div>
			<div class="scrollnav hidden">
				<div id="ab" class="anchor active">About</div>
				<div id="am" class="anchor">Amenities</div>
				<div id="tp" class="anchor">Terms & Pricing</div>
			</div>
			<div id="map-small" class="map2">
				
			</div>


		</div>

		

	</div>

	

	<div id="map-large" class="map">
		
	</div>
	<div class="lang">
		<img src="img/flatbook-challenge/globe.png"> Language and Currency
	</div>
	<nav>
		<div class="logo"></div>
		<a href="javascript:;" class="login">Log In</a>
		<a href="">Sign Up</a>
		<a href="" class="active">Help</a>
		<a href="" >Locations</a>
	</nav>

	</div> <!-- end blur container -->


	<div class="login-overlay hidden">
		<div class="close"></div>
		<h1>
			Hello again
		</h1>

		<div class="form">
			<span>email address</span>
			<input type="text" placeholder="E.g. john@email.com"/>
			<span>password</span>
			<input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"/>
			
			<div class="other">
				<div class="remember">
					<input type="checkbox" /> Remember me
				</div>
				<a href="">Forgot password</a>
			</div>
		</div>

		<div class="button em">Log in with Email</div>

		<div class="or">
			<div class="line"></div>
			<span>or</span>
			<div class="line"></div>
		</div>

		<div class="button fb">Log in with Facebook</div>
		
		
		<div class="signup">
			Not a member yet? <a href="">Sign up</a>
		</div>

	</div>


	<script>
		$( document ).ready(function() {
		    $('.apartment .fav').on("click", function(e) {
		    	e.stopPropagation();
		    	$(this).toggleClass('inactive');
		    });
		    $('.search .listings .apartment').on("click", function() {
		    	$('.fullview').show();
		    	$('.search').toggleClass('hidden');
		    	$('.fullview').toggleClass('hidden');
		    	$('.fv').toggle();
		    	$('.content').scrollTop(0);
		    	setTimeout(function() {
				    $('.search').hide();
				}, 400);
		    });
		    $('.back').on("click", function() {
		    	if ($('.search').hasClass('hidden')) {
		    		$('.search').show();
		    		$('.search').toggleClass('hidden');
		    		$('.fullview').toggleClass('hidden');
		    		$('.fv').toggle();
		    		$('.content').scrollTop(0);
		    		$('.scrollinfo').removeClass('fix');
			    	$('.scrollnav').addClass('hidden');
			    	setTimeout(function() {
					    $('.fullview').hide();
					}, 400);
		    	}
		    });
		    

		    var rx = /INPUT|SELECT|TEXTAREA/i;
		    $(document).bind("keydown keypress", function(e){
		        if( e.which == 8 ){ // 8 == backspace
		            if(!rx.test(e.target.tagName) || e.target.disabled || e.target.readOnly ){
		            	if ($('.search').hasClass('hidden')) {
		            		e.preventDefault();
		            		$('.search').show();
				    		$('.search').toggleClass('hidden');
				    		$('.scrollinfo').removeClass('fix');
					    	$('.scrollnav').addClass('hidden');
				    		$('.fullview').toggleClass('hidden');
				    		$('.fv').toggle();
		  				  	$('.content').scrollTop(0);
				    		
					    	setTimeout(function() {
							    $('.fullview').hide();
							}, 400);
		            	}
		            }
		        }
		        if( e.which == 27 ){ // 8 == backspace
		            if(!rx.test(e.target.tagName) || e.target.disabled || e.target.readOnly ){
		            	if (!$('.login-overlay').hasClass('hidden')) {
		            		e.preventDefault();
		            		$('.blurcontainer').removeClass('blur');
		            		$('.login-overlay').addClass('hidden');
							
		            	}
		            }
		        }
    		});

		    $('.content').on("scroll", function() {

		    	if (!$('.fullview').hasClass('hidden')) {
		    		var scrolled = $(this).scrollTop();
			    	if (scrolled >= 400) {
			    		if (!$('.scrollinfo').hasClass('fix')) {
			    			$('.scrollinfo').addClass('fix');
			    			$('.scrollnav').removeClass('hidden');
			    		}
			    	}
			    	else {
			    		if ($('.scrollinfo').hasClass('fix')) {
			    			$('.scrollinfo').removeClass('fix');
			    			$('.scrollnav').addClass('hidden');
			    		}
			    	}
			    	if ($('#terms').offset().top + 100 < scrolled) {
			    		$('.anchor').removeClass('active');
			    		$('#tp').addClass('active');
			    	}
			    	else {
			    		if ($('#amenities').offset().top + 100 < scrolled) {
				    		$('.anchor').removeClass('active');
			    			$('#am').addClass('active');
				    	}
				    	else {
				    		if ($('#about').offset().top + 100 < scrolled) {
					    		$('.anchor').removeClass('active');
			    				$('#ab').addClass('active');
					    	}
				    	}
			    	}
		    	}
		    	
		    	
		    	
		    	
		    });
    		
    		$('.login').on("click",function(e) {
    			e.stopPropagation();
    			$('.login-overlay').removeClass('hidden');
    			setTimeout(function() {
				    $('.blurcontainer').addClass('blur');
				}, 400);


    		})
    		$('.filt .close').on("click",function() {
    			console.log("HI");
    			$(this).parent().hide();
    		});
    		$('.close').on("click",function() {
    			$('.blurcontainer').removeClass('blur');
		        $('.login-overlay').addClass('hidden');

    		});

    		$('.date').on("focus",function() {
    			this.type = 'date';
            	this.focus();
    		});
 

 			$('.label').html("$" + $("#pricerange").val());
    		$("#pricerange").on("input change", function() { 
    			var value = $("#pricerange").val();
    			var percent = (value - 1400)/ (3000 - 1400) * 100;
    			var percentSkewed = (value - 1400)/ (3100 - 1400) * 100;
    			$('.label').html("$" + $("#pricerange").val()).css("margin-left", percentSkewed + "%");
    			$('.progress-fill').css("width", percent + "%");
    			$('.progress-grey').css("width", 100 - percent + "%");

    		});


		});
	
		
	</script>

</body>

</html>