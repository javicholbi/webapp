
			$(document).ready(function(){
				$("#name").change(function(){
					$.ajax({
						url:"procesa.php?category='$(#name)'",
						type: "POST",
						data:"idCategory="+$("#name").val(),
						success: function(opciones){
							$("#row").html(opciones);
						}
					})
				});
			});
		