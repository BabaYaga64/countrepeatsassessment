<?php

	class RepeatCounter
	{

		function CountRepeats($input_word, $string)
		{
			$frequency = 0;

			$array_of_input_words = array();
			$array_of_input_string = str_split($input_word);

			foreach ($array_of_input_string as $letter)
				if(in_array($letter, $array_of_input_words)) {
					$frequency += 1;
				}


			// foreach()

				if ($input_word == $string) {
					return 1;
				if ($input_word != $string)
					return 0;

				}//Ends if statement



		return $frequency;

		}//Ends CountRepeats

	} //Ends class

?>
