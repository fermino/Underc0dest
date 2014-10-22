<?php
	class Examen
	{
		private $File = 'wireless.html';
		private $Answers = array
		(
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			),
			array
			(
				'q' => 'Pregunta?',
				'a' => 1
			)
		);

		public function Check($Answers)
		{
			try
			{
				if(count($Answers) != count($this->Answers))
					return -1;

				$Points = 0;
				$Errors = array();

				$Count = count($Answers);

				for($i = 0; $i < $Count; $i++)
				{
					if($Answers[$i] == $this->Answers[$i]['a'])
						$Points++;
					else
						array_push($Errors, array(array($Answers[$i], $this->Answers[$i])));
				}

				return array
				(
					'points' => $Points,
					'errors' => $Errors
				);
			}
			catch (Exception $E)
			{
				// LOG ERROR
				header("Location: {$this->File}");
			}
		}
	}