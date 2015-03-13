<?php

	class RepeatCounter
	{

		function CountRepeats($input_word, $string)
		{
			$frequency = 0;

			// if ($input_word == $string) {
			// 	return 1;
			// if ($input_word != $string)
			// 	return 0;
			// }

			$array_of_words = explode(" ", $input_word);

			foreach ($array_of_words as $word) {
				if ($word == $string) {
					$frequency = $frequency + 1;
				}
			}

				return $frequency;
		 }//Ends CountRepeats

	} //Ends class

?>
