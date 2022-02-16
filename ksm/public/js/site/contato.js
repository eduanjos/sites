
/*WOW com repetição de SCROOL*/ 
  // Helper function for add element box list in WOW
  WOW.prototype.addBox = function(element) {
  	this.boxes.push(element);
  };

  // Init WOW.js and get instance
  var wow = new WOW();
  wow.init();

  // Attach scrollSpy to .wow elements for detect view exit events,
  // then reset elements and add again for animation
  $('.wow').on('scrollSpy:exit', function() {
  	$(this).css({
  		'visibility': 'hidden',
  		'animation-name': 'none'
  	}).removeClass('animated');
  	wow.addBox(this);
  }).scrollSpy();
//

$(function(){

	var DIRPAGE = "https://"+document.location.hostname+"/";

	$("form").on("submit",function(event){

		event.preventDefault();

		$.ajax({

			url: DIRPAGE+"contato/mail",
			method:'get',
			dataType:'html',
			data: $( this ).serialize(),
			success: function(result){

	      		$("#mensagem").html(result);
	    	},
	    	complete: function(){

	    		$("form").trigger("reset");
	    	}
		});
	})
})