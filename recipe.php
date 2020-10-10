<!-- Caleb Johnson
CIS 1610 and 1408 
recipe page
-->
<?php 
$page_title = 'Welcome to this Site!';
include ('includes/header.html');?>
<div style="background-image: url('https://cdn.pixabay.com/photo/2016/10/22/01/54/wood-1759566_960_720.jpg');">
</br>
</br>
<div class="container">
<div class="recipes">
	<h1>Our homestyle recipes!</h1>
</br>
	<p>Feel free to make your food exactly like the EatFoodHere guys do it!  Although there are a few of our key ingredients we needed to leave out!</p>

<!-- 
Make our 3 items/info fluid to fit all screens, imported from XML 
-->
	<div id="content"></div>
<!-- 
Our buttons at the bottom of the screen, using modals to view the guide
and our jquery plugin to fancy them up a bit
-->
<div class="row">
	<div class="column">
		<div id="ex1" class="modal">
	<div class="polaroid">
	<h1> What is Lorem Ipsum? </h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> </br>
		<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> </br>
	</div>
	<a href="#" rel="modal:close" class="btn-min">Close</a>
	</div>
	<div class = "box">
		<a href="#ex1" rel="modal:open" class="btn"><h5 style="color:#ae2029">GUIDE</h5></a>
	</div>
	</div>
		<div id="ex1" class="modal">
	<div class="polaroid">
	<h1> Where can I get some? </h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> </br>
		<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> </br> 
	</div>
	<a href="#" rel="modal:close" class="btn-min">Close</a>
	</div>
	<div class = "box">
		<a href="#ex1" rel="modal:open" class="btn"><h5 style="color:#ae2029">GUIDE</h5></a>
	</div>
	<div class="column">
	</div>
		<div id="ex1" class="modal">
	<div class="polaroid">
	<h1> Why do we use it? </h1>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> </br>
		<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> </br>
	</div>
	<a href="#" rel="modal:close" class="btn-min">Close</a>
	</div>
	<div class = "box">
		<a href="#ex1" rel="modal:open" class="btn"><h5 style="color:#ae2029">GUIDE</h5></a>
	</div>
	<div class="column">
	</div>
	</div>
</div>
</div>
<?php include ('includes/footer.html');?>
