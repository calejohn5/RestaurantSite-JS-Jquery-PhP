<!--
Caleb Johnson
CIS 1408 and 1610 
index page
--->
<?php #adding in our title and header 
$page_title = 'EatFoodHere!';
include ('includes/header.html');
?>
<!-- background image --->
<link href="css/home1.css" rel="stylesheet">
	<div style="background-image: url('https://cdn.pixabay.com/photo/2016/10/22/01/54/wood-1759566_960_720.jpg');">
<!-- CAROUSEL -->
    <div class="slider">
          <img src="https://cdn.pixabay.com/photo/2015/04/20/13/30/kitchen-731351_960_720.jpg" alt="jQuery Game Development Essentials" class="active" /> 
          <img src="https://cdn.pixabay.com/photo/2016/11/21/16/02/bar-1846137_960_720.jpg" alt="jQuery Mobile Cookbook" /> 
          <img src="https://cdn.pixabay.com/photo/2015/03/26/10/28/restaurant-691397_960_720.jpg" alt="jQuery for Designers" /> 
    </div>
<!-- //CAROUSEL -->
	
<!-- modal -->
	<div id="ex1" class="modal">
	<div class="polaroid">
	<h1> Welcome! </h1>
		<p>We are an up and coming business here to sell, buy, and even repair a phone for you.</p> </br>
		<p>We are located in Duluth Minnesota, although store walk ins are our main goal right now, we are currently taking limited orders online!cated in Duluth Minnesota, although store walk ins are our main goal right now, we are currently takicated in Duluth Minnesota, although store walk ins are our main goal right now, we are currently taki  cated in Duluth Minnesota, although store walk ins are our main goal right now, we are currently taki</p> </br>
	</div>
	<a href="#" rel="modal:close" class="btn-min">Close</a>
	</div>
	<div class = "box">
		<a href="#ex1" rel="modal:open" class="btn">
		<h2 id = "tooltip-3" title="tooltip">Contact</h2></a>
	</div>
<!-- //modal -->
	
<!-- SECTIONS WITH TOOLTIP/POPUP -->
	</br></br></br></br>
	<div class="row">
		<div class="column1">
			<h1 class="text-center"> <a href="register.php">Sign up for special offers!</a></h1>
		</div>
		<div class="column1">
			<h1 class="text-center" id="alerts">Schedule a reservation</h1>
		</div>
<!-- just testing internal  -->
		<script>
        $(document).ready(function(){
            $("#alerts").click(function(){
                alert("We're sorry, but we currently aren't taking reservations due to COVID-19.");
            });
        });
        </script>
<!-- end -->
	</div>
</div>
<?php
# add in our footer
include ('includes/footer.html');
?>
