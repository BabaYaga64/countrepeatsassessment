<?php

	require_once "src/RepeatCounter.php";

	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_1letter_1charstring()
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "a";
			$input_string = "a";


			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_1letter_1char


		function test_1letter_1charstringmismatch() 
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "a";
			$input_string = "b";


			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(0, $result);

		}//Ends test_1letter_1charmismatch


		function test_1letter_2charstring() 
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "a";
			$input_string = "aa";


			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(2, $result);

		}//Ends test_1letter_2charstring


		function test_1letter_2charstringmismatch() 
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "a";
			$input_string = "ba";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_1letter_2charstringmismatch


		function test_2letter_2charstring() 
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "at";
			$input_string = "ta";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_2letter_2charstring




	}//Ends class RepeatCounterTest

?>
