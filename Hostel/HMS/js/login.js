
var attempt=3;
	function validate()
	{
		var username=document.getElementById("UserName").value;
		var password=document.getElementById("Passwod").value;
		
			if(username=="admin" && password=="123")
			{
				window.location="main.php";
				return false;
			}
			else
			{
				attempt--;
				alert("Your user name or passwor is wrong. please try again!");
				if(attempt==0)
				{
				document.getElementById("UserName").disabled=true;
				document.getElementById("Passwod").disabled=true;
				document.getElementById("log-btn").disabled=true;
				return false;
				}
			}
	}
			




























/*   $(document).ready(function()
  {
        $('.log-btn').click(function()
		{
            $('.log-status').addClass('wrong-entry');
           $('.alert').fadeIn(500);
           setTimeout( "$('.alert').fadeOut(1500);",3000 );
        }
        $('.form-control').keypress(function()
		{
            $('.log-status').removeClass('wrong-entry')
        }

    } */