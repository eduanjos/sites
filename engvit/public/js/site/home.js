$(function(){
	var DIRPAGE = "http://"+document.location.hostname+"/engvit/";
	$(document).on("click","#btnSobre",function(e){
		e.preventDefault();
		$("#btnSobre").fadeOut(2000);
		$("#noneSobre").fadeIn(2000);
	});

	$(document).on("click","#btnSolucoes",function(e){
		e.preventDefault();
		$("#btnSolucoes").fadeOut(2000);
		$("#noneServicos").fadeIn(2000);
	});
	$("form").on("submit",function(event){
		event.preventDefault();
		$.ajax({
			url: DIRPAGE+"contato/mail",
			method:'get',
			dataType:'html',
			data: $(this).serialize(),
			success: function(result){
				$(".msg").html(result);
			},
			complete: function(){
				$("form").trigger("reset");
			}
		});
	})
})