<!-- Caleb Johnson
CIS 1408 and 1610
menu page
-->
<?php 
$page_title = 'Welcome to this Site!';
include ('includes/header.html');

// DECALRING 2 DIMENSIONAL ARRAYS
$luna=array(array("hamburger","$1.89"),array("Fries","$1.49"),array("Tacos","$1.46"),array("Wrap","$3.50"),array("Salad","$2.25"),array("Hotdog","$1.99"));

$dina=array(array("Pretzel","$1.89"),array("Pasta","$1.49"),array("Burrito","$1.46"),array("Tenders","$3.50"),array("Soup","$2.25"),array("Lasagna","$1.99"),array("Wings","$1.99"),array("Ham Sammich","$1.99"));

$appa=array(array("nachos","$1.89"),array("tots","$1.49"),array("motz sticks","$1.46"),array("grilled cheese","$3.50"),array("side salad","$2.25"),array("street tacos","$1.99"));

$drinka=array(array("soda","$1.89"),array("choccy milk","$1.49"),array("orange juice","$1.46"),array("water","$500"),array("Margaratia","$2.25"),array("Beer","$1.99"));

$dessa=array(array("cheesecake","$1.89"),array("brownie","$1.49"),array("chocolate cake","$1.46"),array("icecream","$500"));
?>
<div style="background-image: url('https://cdn.pixabay.com/photo/2016/10/22/01/54/wood-1759566_960_720.jpg');">
    
<!-- here is where we start our accordion jquery plugin -->
<!-- while using custom jquery css -->
<link rel="stylesheet" href="css/style.css">
    <div class="accordion">
      <div class="accordion-item">
        <div class="item-header">
          <h1 class="title">Lunch</h1>
          <div class="icon">+</div>
        </div>
        <ul class = "text">
        <?php
        foreach($luna as $item){
// Create list item for every item in $luna array (lunch) using foreach
            echo "<li>".$item[0]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item[1]."</li>";
        }
        ?>
        </ul>
      </div>
<!-- do this for all items, pulling everything from our array -->
      <div class="accordion-item">
        <div class="item-header">
          <h1 class="title">Dinner</h1>
          <div class="icon">+</div>
        </div>
        <ul class = "text">
        <?php
        foreach($dina as $item){
            echo "<li>".$item[0]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item[1]."</li>";
        }
        ?>
		</ul>
      </div>
      <div class="accordion-item">
        <div class="item-header">
          <h1 class="title">Appetizers</h1>
          <div class="icon">+</div>
        </div>
        <ul class = "text">
        <?php
        foreach($appa as $item){
            echo "<li>".$item[0]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item[1]."</li>";
        }
        ?>
		</ul>
      </div>
      <div class="accordion-item">
        <div class="item-header">
          <h1 class="title">Desserts</h1>
          <div class="icon">+</div>
        </div>
        <ul class = "text">
        <?php
        foreach($dessa as $item){
            echo "<li>".$item[0]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item[1]."</li>";
        }
        ?>
		</ul>
      </div>
      <div class="accordion-item">
        <div class="item-header">
          <h1 class="title">Drinks</h1>
          <div class="icon">+</div>
        </div>
        <ul class = "text">
        <?php
        foreach($drinka as $item){
            echo "<li>".$item[0]."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$item[1]."</li>";
        }
        ?>
		</ul>
      </div>
    </div>
</div>
<?php
include ('includes/footer.html');
?>
