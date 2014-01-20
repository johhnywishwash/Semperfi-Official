$(document).ready(function(){

				$("#name")
				.click(function(){
					$("#name").css("color", "#444");
					if ($("#name").val() == "" || $("#name").val() == "Your Name"){
					$("#name").attr("value", "");
				  }	
				})
				.focus(function(){
					$("#name").css("color", "#444");
					if ($("#name").val() == "" || $("#name").val() == "Your Name"){
					$("#name").attr("value", "");
				  }	
				})
				.blur(function(){
					if ($("#name").val() == ""){
					$("#name").css("color", "#AAA");
					$("#name").attr("value", "Your Name");
				  }
				})
				.keyup(function(){
					var textareaString = $("#name").val();
					if 	(textareaString.length >= 10){
					$("#name").val($("#name").val().substr(0,100));	
					}
				});
				
				$("#mail")
				.click(function(){
					$("#mail").css("color", "#444");
					if ($("#mail").val() == "" || $("#mail").val() == "E-mail Address"){
					$("#mail").attr("value", "");
				  }	
				})
				.focus(function(){
					$("#mail").css("color", "#444");
					if ($("#mail").val() == "" || $("#mail").val() == "E-mail Address"){
					$("#mail").attr("value", "");
				  }	
				})
				.blur(function(){
					if ($("#mail").val() == ""){
					$("#mail").css("color", "#AAA");
					$("#mail").attr("value", "E-mail Address");
				  }
				})
				.keyup(function(){
					var textareaString = $("#mail").val();
					if 	(textareaString.length >= 10){
					$("#mail").val($("#mail").val().substr(0,100));	
					}
				});
					
				$("#subject")
				.click(function(){
					$("#subject").css("color", "#444");
					if ($("#subject").val() == "" || $("#subject").val() == "Subject"){
					$("#subject").attr("value", "");
				  }	
				})
				.focus(function(){
					$("#subject").css("color", "#444");
					if ($("#subject").val() == "" || $("#subject").val() == "Subject"){
					$("#subject").attr("value", "");
				  }	
				})
				.blur(function(){
					if ($("#subject").val() == ""){
					$("#subject").css("color", "#AAA");	
					$("#subject").attr("value", "Subject");
				  }
				})
				.keyup(function(){
					var textareaString = $("#subject").val();
					if 	(textareaString.length >= 10){
					$("#subject").val($("#subject").val().substr(0,100));	
					}
				});
				
				$("#text")
				.click(function(){
					$("#text").css("color", "#444");
					if ($("#text").val() == "" || $("#text").val() == "E-mail Content"){
					$("#text").attr("value", "");
				  }	
				}) 
				.focus(function(){
					$("#text").css("color", "#444");
					if ($("#text").val() == "" || $("#text").val() == "E-mail Content"){
					$("#text").attr("value", "");
				  }	
				}) 
				.blur(function(){
					if ($("#text").val() == ""){
					$("#text").css("color", "#AAA");	
					$("#text").attr("value", "E-mail Content");
				  }
				})
				.keyup(function(){
					var textareaString = $("#text").val();
					if 	(textareaString.length >= 100){
					$("#text").val($("#text").val().substr(0,100));	
					}
				});
});
