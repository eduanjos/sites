/*  ----------- VARIÁVEIS EXTERNAS  -----------  */
// var DIRPAGE = "https://"+document.location.hostname+"/";
/* -------------------------------------------- */

/*  ----------- SCRIPTS EXTERNOS  -----------  */

	/*  ----------- WOW COM REPETIÇÃO DE SCROOL  -----------  */
	WOW.prototype.addBox = function(element) {
		this.boxes.push(element);
	};

	var wow = new WOW();
	wow.init();

	$('.wow').on('scrollSpy:exit', function() {
		$(this).css({
			'visibility': 'hidden',
			'animation-name': 'none'
		}).removeClass('animated');
		wow.addBox(this);
	}).scrollSpy();
	/* -------------------------------------------- */

/* -------------------------------------------- */

/*  ----------- JQUERY  -----------  */
$(function(){
	/*  ----------- LINK COM EFEITO  -----------  */
	$("a").on('click', function(event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 1000, function(){
				window.location.hash = hash;
			});
		}
	});
	/* -------------------------------------------- */

	/*  ----------- BOTÃO FLUTUANTE  -----------  */
	// function toggleFAB(fab){
	// 	if(document.querySelector(fab).classList.contains('show')){
	// 		document.querySelector(fab).classList.remove('show');
	// 	}else{
	// 		document.querySelector(fab).classList.add('show');
	// 	}
	// }

	// document.querySelector('.btnFloat .main').addEventListener('click', function(){
	// 	toggleFAB('.btnFloat');
	// });

	// document.querySelectorAll('.btnFloat ul li button').forEach((item)=>{
	// 	item.addEventListener('click', function(){
	// 		toggleFAB('.btnFloat');
	// 	});
	// });
	/* -------------------------------------------- */
});