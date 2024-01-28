// ketika tombol btn-menu di klik
const navbarMenu = document.querySelector('.navbar-menu');
document.querySelector('#btn-menu').onclick = () =>{
	navbarMenu.classList.toggle('active');
};

//kemudian kita buat si menu sidebar navbarnya ketika kita klik di luar menu sidebar,
// maka si menu sidebar itu bakal ketutup
const btnMenu = document.querySelector('#btn-menu');
document.addEventListener('click', function(e){
	if(!btnMenu.contains(e.target) && !navbarMenu.contains(e.target)){
		navbarMenu.classList.remove('active');
	}
});

// ketika tombol btn-user di klik
const btnUser = document.querySelector('.user');
document.querySelector('#btn-user').onclick = (e) =>{
	btnUser.classList.toggle('active');
	e.preventDefault();
};


// owl-carousel
$(document).ready(function(){
	$('.hero .owl-carousel').owlCarousel({
		autoplay: true,
		nav: true,
		loop: true,
		dots: true,
		inifinite: true,
		speed: 4000,
		autoplaySpeed: 2500,
		slideToShow: 1,
		items: 1,
		navTex: [
			"<i class='fas fa-angle-left'></i>",
			"<i class='fas fa-angle-right'></i>"
		],
		navContainer: "#owl-nav"
	});
});


// owl-carousel detail-produk
$(document).ready(function(){
	$('.detail-produk .owl-carousel').owlCarousel({
		nav: true,
		loop: true,
		dots: true,
		inifinite: true,
		speed: 4000,
		slideToShow: 1,
		items: 1,
		navTex: [
			"<i class='fas fa-angle-left'></i>",
			"<i class='fas fa-angle-right'></i>"
		],
		navContainer: "#owl-nav"
	});
});


// raja ongkir
$(document).ready(function(){
	$.ajax({
		url: 'data_provinsi.php',
		type: 'post',
		success: function (data_provinsi) {
			$("select[name=provinsi]").html(data_provinsi);
		}
	});
});