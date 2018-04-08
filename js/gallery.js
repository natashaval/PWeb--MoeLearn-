$('.container-content').css("margin", "50px");

for (var i=1;i<=4;i++){
//	$('.header-wallpaper-'+i).css("background-color", "green");
	$('#head-'+i).hide();
}

for (var j=1;j<=4;j++){
	$('#nav-'+j).on('click', {'idx':j}, function(e) {
		console.log('You clicked'+e.data.idx);
		$('.header-active').hide();
		$('.content-wallpaper').hide();
		$('.container-content .header-active').removeClass('header-active');
		$('#head-'+e.data.idx).show();
		$('#head-'+e.data.idx).addClass('header-active');
		$('html, body').animate({
			scrollTop: $('.container-content').offset().top
		}, 1500);
	});
}

$('#back').on('click',function(){
	$('html, body').animate({
		scrollTop: $('nav').offset().top}, 1500);
	});

function openImage(imgs){
	var expandImg = document.getElementById("expandedImg");
	expandImg.src = imgs.src;
	expandImg.parentElement.style.display = "block";
}