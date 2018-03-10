$('#header-mirai').hide();
$('#header-haruka').hide();
$('#header-kanata').hide();
$('#header-kizuna').hide();
$('#header-chitose').hide();
$('#header-eiji').hide();
$('#header-retrokyuu').hide();
$('.container-characters img').hide();
$('.content-profile').hide();

$(".nav-mirai").click(function(){
	$('.container-header .header-active').hide();
	$('.container-characters .characters-active').hide();
	$('.container-header .header-active').removeClass('header-active');
	$('.container-characters .characters-active').removeClass('characters-active');
	$('#header-mirai').addClass('header-active');
	$('#header-mirai').fadeIn(1500);
	$('#characters-mirai').addClass('characters-active');
	$('#characters-mirai').fadeIn(4000);
	$('.container-profile').hover(
		function(){$('#profile-mirai').slideDown();},
		function(){$('#profile-mirai').slideUp();
	});
});

$(".nav-haruka").click(function(){
	$('.container-header .header-active').hide();
	$('.container-characters .characters-active').hide();
	$('.container-header .header-active').removeClass('header-active');
	$('.container-characters .characters-active').removeClass('characters-active');
	$('#header-haruka').addClass('header-active');
	$('#header-haruka').fadeIn(1500);
	$('#characters-haruka').addClass('characters-active');
	$('#characters-haruka').fadeIn(4000);
	$('.container-profile').hover(
		function(){$('#profile-haruka').slideDown();},
		function(){$('#profile-haruka').slideUp();
	});
});

$(".nav-kanata").click(function(){
	$('.container-header .header-active').hide();
	$('.container-characters .characters-active').hide();
	$('.container-header .header-active').removeClass('header-active');
	$('.container-characters .characters-active').removeClass('characters-active');
	$('#header-kanata').addClass('header-active');
	$('#header-kanata').fadeIn(1500);
	$('#characters-kanata').addClass('characters-active');
	$('#characters-kanata').fadeIn(4000);
	$('.container-profile').hover(
		function(){$('#profile-kanata').slideDown();},
		function(){$('#profile-kanata').slideUp();
	});
});

$(".nav-kizuna").click(function(){
	$('.container-header .header-active').hide();
	$('.container-characters .characters-active').hide();
	$('.container-header .header-active').removeClass('header-active');
	$('.container-characters .characters-active').removeClass('characters-active');
	$('#header-kizuna').addClass('header-active');
	$('#header-kizuna').fadeIn(1500);
	$('#characters-kizuna').addClass('characters-active');
	$('#characters-kizuna').fadeIn(4000);
	$('.container-profile').hover(
		function(){$('#profile-kizuna').slideDown();},
		function(){$('#profile-kizuna').slideUp();
	});
});

$(".nav-chitose").click(function(){
	$('.container-header .header-active').hide();
	$('.container-characters .characters-active').hide();
	$('.container-header .header-active').removeClass('header-active');
	$('.container-characters .characters-active').removeClass('characters-active');
	$('#header-chitose').addClass('header-active');
	$('#header-chitose').fadeIn(1500);
	$('#characters-chitose').addClass('characters-active');
	$('#characters-chitose').fadeIn(4000);
	$('.container-profile').hover(
		function(){$('#profile-chitose').slideDown();},
		function(){$('#profile-chitose').slideUp();
	});
});

$(".nav-eiji").click(function(){
	$('.container-header .header-active').hide();
	$('.container-characters .characters-active').hide();
	$('.container-header .header-active').removeClass('header-active');
	$('.container-characters .characters-active').removeClass('characters-active');
	$('#header-eiji').addClass('header-active');
	$('#header-eiji').fadeIn(1500);
	$('#characters-eiji').addClass('characters-active');
	$('#characters-eiji').fadeIn(4000);
	$('.container-profile').hover(
		function(){$('#profile-eiji').slideDown();},
		function(){$('#profile-eiji').slideUp();
	});
});

$(".nav-retrokyuu").click(function(){
	$('.container-header .header-active').hide();
	$('.container-characters .characters-active').hide();
	$('.container-header .header-active').removeClass('header-active');
	$('.container-characters .characters-active').removeClass('characters-active');
	$('#header-retrokyuu').addClass('header-active');
	$('#header-retrokyuu').fadeIn(1500);
	$('#characters-retrokyuu').addClass('characters-active');
	$('#characters-retrokyuu').fadeIn(4000);
	$('.container-profile').hover(
		function(){$('#profile-retrokyuu').slideDown();},
		function(){$('#profile-retrokyuu').slideUp();
	});
});