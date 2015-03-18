<?php

	class RepeatCounter
	{

		function CountRepeats($word_to_search_for, $string_to_search_in)
		{
			//Set counter to 0
			$frequency = 0;

			//Create array of strings separated by a space from the input string the user enters
			$array_of_words = explode(" ", $string_to_search_in);



			//Run through each of the words in the array, and if the string matches the input word, then add 1. If there is no input, then return 0.
			foreach ($array_of_words as $word) {
				if ($word == $word_to_search_for) {
					$frequency += 1;

				} elseif ($word_to_search_for == null)
					return 0; 
				}
				return $frequency;

		}//Ends CountRepeats

	} //Ends class

?>
