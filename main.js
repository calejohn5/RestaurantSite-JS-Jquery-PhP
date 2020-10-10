/* Caleb Johnson
CIS 1408 and 1610
jquery stuff
*/

// make function to create variable with active property that passes onto the next img with interval rate of 3500
	$(document).ready(function () {
function slider(){
	$current = $('.slider img.active');
	if($current.length==0){
		$('.slider img:first-child').addClass('active');
	}else{
		$next = $current.removeClass('active').next();
		if($next.length==0){
			$('.slider img:first-child').addClass('active');
		}else{
			$next.addClass('active');
		}
	}
}
// set rate of carousel 
setInterval(slider,4000);
$( document ).ready(slider);

//give our modal a smoother transition, with a simpler design
	$('a[href="#ex1"]').click(function () {
		$(this).modal({
			fadeDuration: 1000,
			fadeDelaay: 0.50,
			escapeClose: false,
			clickClose: false,
			showClose: false
		});
		return false;
	});


// allow our accordion to work, with some + and - indicators
      $(".item-header").click(function(){
        $(".accordion-item").removeClass("active");
        $(this).parent().addClass("active");
        $(".icon").text("+");
        $(this).children(".icon").text("-");
    });
	
///////// MAKE OUR NAVBAR COLLAPSABLE  /////
  $('.navbar-toggler').click(function() {
    $('.collapse').collapse('toggle');
  });
	


///////// IMPORTING OUR XML DATA ////////////////
	var str = "<div class='row'>";
	$.get('phonebook.xml',function(data) {
		var count = 0;
		// filling page with content with looping
		$(data).find('person').each(function() {
			count++;
			str += "<div class='col'>"
			+"<img src='"+$(this).find('profile').text()+"' class='img img-fluid'/>"
			+"<h2>"+$(this).find('name').text()+"</h2>"
			+"<p>"+$(this).find('phone').text()+"</p>"
			+"<div class='ingredients'>"
			+$(this).find('ingredients').html()
			+"</div>"
		+"</div>";
		if(count==3) {
			count=0;
			str += "</div><div class='row'>";	
			}
		});
		$('#content').html(str);
	});
});
