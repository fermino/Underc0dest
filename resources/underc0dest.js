function Form_Validate()
{
	// VALIDAR RADIOS
}

function Form_Send()
{
	// ENVIAR
}

function FloatBox_Login()
{
	var Username = document.getElementById('Login').value.trim();

	if(Username != '')
	{
		$.post('login.php', { username: Username }).done(function(Data)
		{
			if(Data == 'true')
				document.getElementById("FloatLogin").style.display = 'none';
		});
	}
	else
	{
		document.getElementById('Login').value = null;
		document.getElementById('Login').placeholder = 'Ingresa un nombre';
	}
}

function FloatBox_Hide()
{
	document.getElementById('FloatBox').style.visibility = 'hidden';
}