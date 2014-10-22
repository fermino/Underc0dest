<?php
	final class Underc0dest
	{
		private $Logfile = null;
		private $Answers = null;

		public function __construct($Testname, $Answers)
		{
			$this->Logfile = 'log' . DIRECTORY_SEPARATOR . "{$Testname}.log";
			$this->Answers = $Answers;
			var_dump($Testname, $this->Logfile);
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