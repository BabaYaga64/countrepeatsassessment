<?php

	require_once "src/RepeatCounter.php";

	class RepeatCounterTest extends PHPUnit_Framework_TestCase
	{

		function test_1letter_1charstring()
		{

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "a";
			$input2 = "a";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input1, $input2);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_1letter_1char

		function test_1letter_1charstringmismatch() {

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "a";
			$input2 = "b";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input1, $input2);

			//Assert
			$this->assertEquals(0, $result);

		}//Ends test_1letter_1charmismatch


		function test_1letter_2charstring() {

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "a";
			$input2 = "aa";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input1, $input2);

			//Assert
			$this->assertEquals(2, $result);

		}//Ends test_1letter_1charmismatch

		function test_1letter_2charstringmismatch() {

			//Arrange
			$test_RepeatCounter = new RepeatCounter;
			$input1 = "a";
			$input2 = "ba";

			//Act
			$result = $test_RepeatCounter->CountRepeats($input1, $input2);

			//Assert
			$this->assertEquals(1, $result);

		}//Ends test_1letter_2charstringmismatch




	}//Ends class RepeatCounterTest

?>
