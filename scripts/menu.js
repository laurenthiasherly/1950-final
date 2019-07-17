

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

	const pattern = new RegExp("^(a|A)[0-9]{8}$");

	$("#submit").click(function(e){
		let isValid = true;
		if($.trim($("#firstname").val()) !== "" && 
			$("#firstname").val() !== null &&
			$("#firstname").val() !== "" &&
			$("#lastname").val() !== "" && 
			$("#lastname").val() !== "" &&
			$("#lastname").val() !== null){

			if(pattern.test($("#studentno").val()) === true){
				console.log("student no ok")
				$("#popup").css("display", "block");
				$("#reminder2").css("display", "none");

				$('#firstname').empty();
				$('#firstname').attr('value', '');

				$('form :input').val('');
				$('form :checked').removeAttr('checked');
				$('#submit').val('Submit');
				$("#defaultcheck").attr("checked", "checked");
			}

			else{
				$("#reminder2").css("display", "block");
				isValid = false;
			}

			$("#reminder").css("display", "none");	
		}

		else{
			if(pattern.test($("#studentno").val()) === true){
				console.log("student no ok");
				$("#reminder2").css("display", "none");
			}
			else{
				$("#reminder2").css("display", "block");
			}

			$("#reminder").css("display", "block");
			isValid = false;
		}

		console.log(pattern.test($("#studentno").val()));

		e.preventDefault();

	});

});		