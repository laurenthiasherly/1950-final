

$(document).ready(function(){

	$( "#hamburger" ).click(function() {
		$( "nav" ).toggle();
	});

	$( window ).resize(function() {
		if($( window ).width() > 768 || $( document ).width() > 768){
			$( "nav" ).css("display", "block");
		}
		else{
			$( "nav" ).css("display", "none");
		}
	});

	$("#scrolltop").click(function(){
		window.scrollTo(0, 0);
	});

	$("#close").click(function(){
		$("#popup").css("display", "none");
	});

	$("#submit").click(function(){
		if($("#firstname").val() !== "" && $("#lastname").val() !== ""){
			$("#popup").css("display", "block");
			$("#reminder").css("display", "none");
		}
		else{
			$("#reminder").css("display", "block");
			window.scrollTo(0, 120);
		}
		console.log("submit");
	});

});		