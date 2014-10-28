function Form_Validate()
{
	var Checked = 0;
	var Underc0dest = document.getElementById('Underc0dest');

	for(i = 0; i < Underc0dest.length; i++)
		if(Underc0dest[i].checked == true)
			Checked++;

	if(Checked == 10)
		Underc0dest.submit();
	else
		alert('Debes completar todo el formulario...');
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