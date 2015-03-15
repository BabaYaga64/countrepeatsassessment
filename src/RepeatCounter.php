<?php

	class RepeatCounter
	{

		function CountRepeats($input_word, $input_string)
		{
			//Set counter to 0
			$frequency = 0;

			//Create array of strings separated by a space from the input string the user enters
			$array_of_words = explode(" ", $input_string);



			//Run through each of the words in the array, and if the string matches the input word, then add 1. If there is no input, then return 0.
			foreach ($array_of_words as $word) {
				if ($word == $input_word) {
					$frequency += 1;

				}

				elseif ($input_word == null)
					return 0;
			}
				return $frequency;

		 }//Ends CountRepeats

	} //Ends class

?>
