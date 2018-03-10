for (var i=1;i<=7;i++){
	$('#header-'+i).hide();
	$('#characters-'+i).hide();
	$('#profile-'+i).hide();
}

for (var j=1;j<=7;j++){
	$('.nav-'+j).on('click', {'idx':j}, function(e) {
		$('.container-header .header-active').hide();
		$('.container-characters .characters-active').hide();
		$('.profile-active').hide();
		$('.container-header .header-active').removeClass('header-active');
		$('.container-characters .characters-active').removeClass('characters-active');
		$('.content-profile').removeClass('profile-active');
		$('#profile-'+e.data.idx).addClass('profile-active');
		$('#header-'+e.data.idx).addClass('header-active');
		$('#header-'+e.data.idx).fadeIn(1500);
		$('#characters-'+e.data.idx).addClass('characters-active');
		$('#characters-'+e.data.idx).fadeIn(4000);
		$(this).parent().css({"border-style": "inset","opacity":"1"});
		$('.container-profile').hover(
			function(){$('.profile-active').slideDown();},
			function(){$('.profile-active').slideUp();}
			);
	});
}
