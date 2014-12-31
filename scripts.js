
$(document).ready(function(){
	var height_informations = $(".informations").height();
	var height_document = $(document).height();
	$(".informations").css("margin-top",(height_document - height_informations) / 4);

	var db = [];

	setTimeout(function(){
		db = JSON.parse($("#setores-val").val());
	},500);

	$("#setor-form").keyup(function(){
		if($("#setor-form").val() != ""){
			$(".setor-data").each(function(){
				if($(this).attr("id") != "set-" + $("#setor-form").val()){
					$(this).hide();
				}	
			});
		}
		else{
			$(".setor-data").show();
		}
	});

});