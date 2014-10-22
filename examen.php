<?php
	class Examen
	{
		private $File = 'examen.php';
		private $Answers = array
		(
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'r' => 'Respuesta',
				'a' => 1
			)
		);

		public function Check($Answers)
		{
			try
			{
				$Points = 0;
				$Errors = array();

				$Count = count($Answers);

				for($i = 0; $i < $Count; $i++)
				{
					if($Answers[$i] == $this->Answers[$i]['a'])
						$Points++;
					else
						array_push($Errors, array($Answers[$i], $this->Answers[$i]['q'], $this->Answers[$i]['r']));
				}

				return array
				(
					'points' => $Points,
					'errors' => $Errors
				);
			}
			catch (Exception $E)
			{
				// Log
				return array('redirect' => $this->File);
			}
		}
	}

	if(isset($_POST['1']) && isset($_POST['2']) && isset($_POST['3']) && isset($_POST['4']) && isset($_POST['5']) && isset($_POST['6']) && isset($_POST['7']) && isset($_POST['8']) && isset($_POST['9']) && isset($_POST['10']))
	{
		$E = new Examen();
		$R = $E->Check
		(
			array
			(
				$_POST['1'],
				$_POST['2'],
				$_POST['3'],
				$_POST['4'],
				$_POST['5'],
				$_POST['6'],
				$_POST['7'],
				$_POST['8'],
				$_POST['9'],
				$_POST['10']
			)
		);

		if(isset($R['points']) && isset($R['errors']))
		{
			if($R['points'] == 10 && $R['errors'] === array())
			{
				echo 'Puntaje: 10/10';
				echo '<br>';
				echo '¡Felicitaciones! No has cometido ningún error';
			}
			else
			{
				echo "Puntaje: {$R['points']}/10";
				echo '<br>';
				echo 'Has cometido algunos errores: ';

				foreach($R['errors'] as $Error)
				{
					echo '<br>';
					echo "{$Error[0]}. {$Error[1]}";
					echo '<br>';
					echo "Respuesta correcta: {$Error[2]}";
				}
			}
		}
		else if(isset($R['redirect']))
			header("Location: {$R['redirect']}");
		else exit;
	}
	else
	{
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Exámen Wireless | Underc0de</title>

		<meta charset="UTF-8">

		<meta name="author" content="fermino">
		<meta name="description" content="Exámen online en el área de Wireless. Seguridad, Hacking, etc...">
		<meta name="keywords" content="wireless, hacking, cracking, examen">
	</head>
	<body>
		<h1>Exámen Wireless | Underc0de</h1>
		<form action="examen.php" method="post">
			<input type="radio" name="1" value="1">Respuesta a<br>
			<input type="radio" name="1" value="2">Respuesta b<br>
			<input type="radio" name="1" value="3">Respuesta c<br>
			<input type="radio" name="2" value="1">Respuesta a<br>
			<input type="radio" name="2" value="2">Respuesta b<br>
			<input type="radio" name="2" value="3">Respuesta c<br>
			<input type="radio" name="3" value="1">Respuesta a<br>
			<input type="radio" name="3" value="2">Respuesta b<br>
			<input type="radio" name="3" value="3">Respuesta c<br>
			<input type="radio" name="4" value="1">Respuesta a<br>
			<input type="radio" name="4" value="2">Respuesta b<br>
			<input type="radio" name="4" value="3">Respuesta c<br>
			<input type="radio" name="5" value="1">Respuesta a<br>
			<input type="radio" name="5" value="2">Respuesta b<br>
			<input type="radio" name="5" value="3">Respuesta c<br>
			<input type="radio" name="6" value="1">Respuesta a<br>
			<input type="radio" name="6" value="2">Respuesta b<br>
			<input type="radio" name="6" value="3">Respuesta c<br>
			<input type="radio" name="7" value="1">Respuesta a<br>
			<input type="radio" name="7" value="2">Respuesta b<br>
			<input type="radio" name="7" value="3">Respuesta c<br>
			<input type="radio" name="8" value="1">Respuesta a<br>
			<input type="radio" name="8" value="2">Respuesta b<br>
			<input type="radio" name="8" value="3">Respuesta c<br>
			<input type="radio" name="9" value="1">Respuesta a<br>
			<input type="radio" name="9" value="2">Respuesta b<br>
			<input type="radio" name="9" value="3">Respuesta c<br>
			<input type="radio" name="10" value="1">Respuesta a<br>
			<input type="radio" name="10" value="2">Respuesta b<br>
			<input type="radio" name="10" value="3">Respuesta c<br>

			<input type="submit" name="submit" value="Listo!">
		</form>
	</body>
</html>
<?php
	}
?>