<?php
	const NL = "\n";

	final class Underc0dest
	{
		private $Logfile = null;
		private $Answers = null;

		public function __construct($Testname, $Answers)
		{
			$this->Logfile = 'log' . DIRECTORY_SEPARATOR . "{$Testname}.log";
			$this->Answers = $Answers;

			if(!is_dir('log'))
				if(!mkdir('log'))
					throw new Exception("Can't create log folder");

			if(!is_writable('log' . DIRECTORY_SEPARATOR))
				throw new Exception("Can't write to log folder");
		}

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
						array_push($Errors, array($i, $this->Answers[$i]['q'], $this->Answers[$i]['r'], $Answers[$i]));
				}

				$Results = array
				(
					'points' => $Points,
					'errors' => $Errors
				);

				$this->log($Results);

				return $Results;
			}
			catch (Exception $E)
			{
				// Log
				return array('redirect' => $this->File);
			}
		}

		private function log($Results)
		{
			$Data = '';

			$Data .= "Puntaje: {$Results['points']}";
			$Data .= NL;

			foreach($Results['errors'] as $Error)
			{
				$Data .= "Error: {$Error[0]}. {$Error[1]} - {$Error[2]}";
				$Data .= NL;
			}

			$Data .= '-';
			$Data .= NL;

			$Data = (is_file($this->Logfile) && is_readable($this->Logfile)) ? file_get_contents($this->Logfile) . $Data : $Data;

			file_put_contents($this->Logfile, $Data);
		}
	}