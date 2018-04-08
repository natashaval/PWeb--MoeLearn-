var modal = document.getElementById('myModal');

//direct admin to manga submission
document.getElementById("adminBtn").onclick = function(){
	window.location.href = "mangasubmit.php";
}


// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
	modal.style.display = "block";
	$('.first').show(1200);
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}

$('.second').hide();
$('.first').hide();

$("#nextBtn").on('click', function(){
//	alert("next");
$('.first').stop().animate({"left": "-50%"},1000);
$('.second').stop().animate({"left": "-50%"},1000);
$('.second').show(1500);

});
$("#prevBtn").on('click', function(){
//	alert("prev");
$('.first').stop().animate({"left": "0%"},1000);
$('.second').stop().animate({"left": "0%"},1000);
$('.second').hide();
 // $('.second').animate({"display" : "none"},1000);
//   $('.second').animate({"transform": "translateX(50%)"},3000);

});

$('#submitform').on('click', function(){
	
	if (typeof(Storage) !== "undefined") {
		$('input[type="text"],input[type="email"], input[type="url"], textarea').each(function(){
			localStorage.setItem($(this).attr("id"),$(this).val());
		});
		$('input[type="radio"]').change(function(){
			localStorage.setItem($(this).attr("id"), $(this).val());
		});

		if (document.getElementById('nameboth').checked) {
			localStorage.setItem('nameboth', "true");
		}
		if (document.getElementById('penname').checked) {
			localStorage.setItem('penname', "true");
		}
		if (document.getElementById('anonymous').checked) {
			localStorage.setItem('anonymous', "true");
		}

		if (document.getElementById('male').checked) {
			localStorage.setItem('gender', "male");
		}
		if (document.getElementById('female').checked) {
			localStorage.setItem('gender', "female");
		}
		if (document.getElementById('other').checked) {
			localStorage.setItem('gender', "other");
		}
	}

	else{
		alert("Your browser does not support Web Storage!");
	}
});

$('#resetform').on('click', function(){
	localStorage.clear();
})