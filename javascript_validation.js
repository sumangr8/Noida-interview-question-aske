$(document).ready(function(){

	//for signup form validate
	var name_err=true;
	var email_err=true;
	var password_err=true;
	var mobile_err=true;
	var pic_err=true;

	$("#name").keyup(function(){
		check_name();
	});
	function check_name()
	{
		var name=$("#name").val();
		if(name.length=="")
		{
			$("#name_err").html("** Name Not Empty");
			name_err=false;
			return false;
		}
		else
		{
			$("#name_err").hide();
		}

		if((name.length < 3) || (name.length >20))
		{
			$("#name_err").show();
			$("#name_err").html("**Name Must Be Between 3 To 20 Character");
			name_err=false;
			return false;
		}
		else
		{
			$("#name_err").hide();
		}

		if(!isNaN(name))
		{
			$("#name_err").show();
			$("#name_err").html("** Only Character");
			name_err=false;
			return false;
		}
		else
		{
			$("#name_err").hide();
		}
	} //name validate end

	$("#email").keyup(function(){
		email_check();
	});

	function email_check()
	{
		var email=$("#email").val();
		if(email.length=="")
		{
			$("#email_err").html("** Email Not Empty");
			email_err=false;
			return false;
		}
		else
		{
			$("#email_err").hide();
		}

		if(email.indexOf('@')<=0)
		{
			$("#email_err").show();
			$("#email_err").html("** Email @ Position Not Valid");
			email_err=false;
			return false;
		}
		else
		{
			$("#email_err").hide();
		}

		if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.'))
		{
			$("#email_err").show();
			$("#email_err").html("** Dot Position Not Valid");
			email_err=false;
			return false;
		}
		else
		{
			$("#email_err").hide();
		}
	} //email validate end

	$("#password").keyup(function(){
		password_check();
	});

	function password_check()
	{
		var password=$("#password").val();
		// var passwordcheck=/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/;
		if(password.length=="")
		{
			$("#password_err").html("Password Not Empty");
			password_err=false;
			return false;
		}
		else
		{
			$("#password_err").hide();
		}

		if(password.length <5)
		{
			$("#password_err").show();
			$("#password_err").html(" ** Password Must Be Greater Then 5 character");
			password_err=false;
			return false;
		}
		else
		{
			$("#password_err").hide();
		}
	} //password validate end

	$("#mobile").keyup(function(){
		mobile_check();
	});

	function mobile_check()
	{
		var mobile=$("#mobile").val();
		if(mobile.length=="")
		{
			$("#mobile_err").html(" ** Mobile Not Empty");
			mobile_err=false;
			return false;
		}
		else
		{
			$("#mobile_err").hide();
		}

		if(isNaN(mobile))
		{
			$("#mobile_err").show();
			$("#mobile_err").html("** Only Character");
			mobile_err=false;
			return false;
		}
		else
		{
			$("#mobile_err").hide();
		}

		if(mobile.length!=10)
		{
			$("#mobile_err").show();
			$("#mobile_err").html("** Length 10");
			mobile_err=false;
			return false;
		}
		else
		{
			$("#mobile_err").hide();
		}
	} //mobile validate


	$("#pic").keydown(function(){
		pic_check();
	});

	function pic_check()
	{
		var pic=$("#pic").val();
		if(pic.length=="")
		{
			$("#pic_err").html("Pic Not Empty");
			pic_err=false;
			return false;
		}
		else
		{
			$("#pic_err").hide();
		}

		var approved=["jpg","jpeg","png","gif"];
		var ext=pic.substring(pic.lastIndexOf('.')+1);
		if(!approved.includes(ext))
		{
			$("#pic_err").show();
			$("#pic_err").html("Image Not Valid");
			pic_err=false;
			return false;
		}
		else
		{
			$("#pic_err").hide();
		}

		var pic_by=$("#pic")[0].files[0].size;
		var pic_size=(pic_by/(1024*1024)).toFixed(2);
		if(pic_size >2)
		{
			$("#pic_err").show();
			$("#pic_err").html("Long Size File");
			pic_err=false;
			return false;
		}
		else
		{
			$("#pic_err").hide();
		}
	}



	$("#signup_form").on("submit",function(e){
		e.preventDefault();
		name_err=true;
		email_err=true;
		password_err=true;
		mobile_err=true;
		pic_err=true;
		check_name();
		email_check();
		password_check();
		mobile_check();
		pic_check();
		if((name_err==true) && (email_err==true) && (password_err==true) && (mobile_err==true) && (pic_err==true))
		{
			alert("Submit");
		}
	});
});
