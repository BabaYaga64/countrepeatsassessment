<?php

	require_once "src/RepeatCounter.php";

	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{
		//Test 1: how many times the word "a" appears in the string "a"
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

		}//Ends test_1letter_1charstring


		//Test 2: how many times the word "a" appears in the string "b"
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

		}//Ends test_1letter_1charstringmismatch


		//Test 3: how many times the word "a" appears in the string "a b"
		function test_1letter_3charstring() 
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "a";
			$input_string = "a b";


			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_1letter_3charstring

		//Test 4: how many times the word "a" appears in the string "aa"
		function test_1letter_2charstringrepeat() 
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "a";
			$input_string = "aa";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(0, $result);

		}//Ends test_1letter_2charstringrepeat


		//Test 5: how many times the word "at" appears in the string "at at"
		function test_2letter_5charstring() 
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input_word = "at";
			$input_string = "at at";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input_word, $input_string);

			//Assert
			$this->assertEquals(2, $result);

		}//Ends test_2letter_5charstring




	}//Ends class RepeatCounterTest

?>
