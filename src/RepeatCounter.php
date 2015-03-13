<?php

	class RepeatCounter
	{

		function CountRepeats($input_word, $string)
		{
			if ($input_word == $string) {
				return 1;
			elseif ($input_word != $string)
				return 0;
			}

		}//Ends CountRepeats


	} //Ends class

?>
