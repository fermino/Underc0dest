<?php
	require_once 'underc0dest.class.php';

	##### BEGIN CONFIG #####
	$TestName = 'test';
	$Answers = array
	(
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		),
		array
		(
			'q' => 'Question?',
			'a' => 0,
			'r' => array
			(
				'Answer 1',
				'Answer 2',
				'Answer 3'
			)
		)
	);
	###### END CONFIG ######
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
		<h1><?=$TestName ?> | Underc0de</h1>
<?php
	if(isset($_POST['0']) && isset($_POST['1']) && isset($_POST['2']) && isset($_POST['3']) && isset($_POST['4']) && isset($_POST['5']) && isset($_POST['6']) && isset($_POST['7']) && isset($_POST['8']) && isset($_POST['9']))
	{
		$E = new Underc0dest($TestName, $Answers);

		$R = $E->Check
		(
			array
			(
				$_POST['0'],
				$_POST['1'],
				$_POST['2'],
				$_POST['3'],
				$_POST['4'],
				$_POST['5'],
				$_POST['6'],
				$_POST['7'],
				$_POST['8'],
				$_POST['9']
			)
		);

		if($R === -1)
			header("Location: {$_SERVER['REQUEST_URI']}");

		if(isset($R['points']) && isset($R['errors']))
		{
			echo "Puntaje: {$R['points']}/10";
			echo '<br>';

			if($R['points'] == 10 && $R['errors'] === array())
			{
				echo '¡Felicitaciones! No has cometido ningún error';
			}
			else
			{
				echo 'Has cometido algunos errores: ';

				foreach($R['errors'] as $Error)
				{
					echo '<br>';
					echo "{$Error[0]}. {$Error[1]}";
					echo '<br>';
					echo "Has respondido: {$Error[2]}";
					echo '<br>';
					echo "Respuesta correcta: {$Error[3]}";
				}
			}
		}
		else
			header("Location: {$_SERVER['REQUEST_URI']}");
	}
	else
	{
?>
		<form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
<?php
			$ic = count($Answers);
			for($i = 0; $i < $ic; $i++)
			{
?>
			<h3><?=$Answers[$i]['q']?></h3>
<?php
				$jc = count($Answers[$i]['r']);
				for($j = 0; $j < $jc; $j++)
				{
?>
			<input type="radio" name="<?=$i; ?>" value="<?php echo $j; ?>"><?php echo $Answers[$i]['r'][$j]?><br>
<?php
				}
			}
?>
			<input type="submit" name="submit" value="Listo!">
		</form>
<?php
	}
?>
</body>
</html>