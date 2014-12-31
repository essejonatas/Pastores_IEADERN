
$(document).ready(function(){
	var height_informations = $(".informations").height()
	var height_document = $(document).height()
	$(".informations").css("margin-top",(height_document - height_informations) / 4)
});